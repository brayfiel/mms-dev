<?php
/**
 * Application controller to update the Phone Type table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\PhoneType;
use App\MmsGlobal;

/**
 * Controller class to update the Phone Type table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class PhoneTypeController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'description'=>'required|unique:phone_types',
    ];

    protected $customMessages = [
        'description.required'  => 'A Description is required',
        'description.unique' => 'You entered a description that '
            . 'is already on file.  Please enter a unique code.',
    ];

    /**
     * Display a listing of the Phone Types.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sortOrder = 'id';
        $restartValue = 0;
        $filterLeft = '';
        $filterRight = '';
        $rows = 1;
        $page = 0;
        $restart = 0;
        $mtCode = '';
        $mtDescription = '';
        $mtUpdate = '';
        $phoneTypes = [];

        if (Session::has('phoneTypeSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('phoneTypeSortOrder') != '') {
                if (session('phoneTypeSortOrder') === 'id'
                    || session('phoneTypeSortOrder') === 'description'
                    || session('phoneTypeSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('phoneTypeSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('phoneTypeSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('phoneTypeSearchLeft') === 'id'
                || session('phoneTypeSearchLeft') === 'description'
            ) {
                $filterLeft = session('phoneTypeSearchLeft');
                $filterRight = session('phoneTypeSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('phoneTypeRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('phoneTypeRestartValue') != '') {
                $restartValue = session('phoneTypeRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = PhoneType::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $phoneTypes = PhoneType::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = PhoneType::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = PhoneType::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = PhoneType::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $phoneTypes = PhoneType::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $phoneTypes = PhoneType::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $phoneTypes = PhoneType::orderBy($sortOrder)
                ->paginate($this->pageSize);
        }

        $sortText = '';
        if ($sortOrder === 'id') {
            $sortText = 'Ordered by ' . $sortOrder;
        } elseif ($sortOrder === 'description') {
            $sortText = 'Ordered by Description';
        } else if ($sortOrder === 'updated_at') {
            $sortText = 'Ordered by Last Updated';
        }

        $searchText = '';
        if ($filterLeft === '') {
        } elseif ($filterLeft === 'id') {
            $searchText = 'Filter: Id is ' . $filterRight;
        } elseif ($filterLeft === 'description') {
            $searchText = 'Filter: Description Contains ' . $filterRight;
        }

        // dd($phoneTypes, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.phonetype.index',
            compact('phoneTypes', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a Phone Type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.phonetype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request Inbound HTTP request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            $input['created_by_id'] = Auth::user()->id;
            $input['last_editted_by_id'] = Auth::user()->id;
            $this->validate($request, $this->rules, $this->customMessages);
            $result = PhoneType::create($input);
            Session::flash(
                'phoneTypeRestartValue',
                $result->id
            );
            Session::flash(
                'phoneTypeStatus',
                'Phone Type #'
                . $result->id
                . ' with a Description of '
                . $result->description
                . ' has been created.'
            );
        }
        return redirect(route('phonetype.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the Phone Type to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phoneType = PhoneType::findOrFail($id);
        $createdBy = $phoneType->createdBy->fullName();
        $lastEditBy = $phoneType->lastEdittedBy->fullName();

        return view(
            'maintenance.phonetype.show',
            compact('phoneType', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the Phone Type to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phoneType = PhoneType::findOrFail($id);
        $createdBy = $phoneType->createdBy->fullName();
        $lastEditBy = $phoneType->lastEdittedBy->fullName();
        return view(
            'maintenance.phonetype.edit',
            compact('phoneType', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request Inbound HTTP request
     * @param int                      $id      Id of record being updated
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            $input['last_editted_by_id'] = Auth::user()->id;

            try
            {
                PhoneType::whereId($id)->first()->update($input);
                Session::flash(
                    'phoneTypeRestartValue',
                    $id
                );
                Session::flash(
                    'phoneTypeStatus',
                    'Phone Type #'
                        . $id
                        . ' with a Description of '
                        . $input['description']
                        . ' has been updated.'
                );
            } catch(\Exception $e) {
                $msg = '';
                // dd($e->errorInfo);
                if ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1048) {
                        $msg = str_replace("Column '", "", $e->errorInfo[2]);
                        $msg = str_replace("'", "", $msg);
                        $msg = str_replace("_", " ", $msg);
                        $msg = str_replace("null", "empty", $msg);
                        $msg = ucfirst($msg);
                    } elseif ($e->errorInfo[1] === 1062) {
                        $msg = "Phone Type code " . $input['id']
                        . " is already in use";
                    } else {
                        $msg = $e->errorInfo[2];
                    }
                    return back()->withErrors($msg . '.  Please try again');
                } else {
                    return back()->withErrors($e->errorInfo[2]);
                }
            }
        }
        return redirect(route('phonetype.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the Phone Type to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $phoneType = PhoneType::findOrFail($id);
                $phoneType->delete();
                Session::flash(
                    'phoneTypeStatus',
                    'Phone Type #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'phoneTypeStatus',
                        'Cannot delete phone type #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete phone type.  "
                        . "It is in use on a member's telephone.";
                    } else {
                        $msg = $e->errorInfo[2];
                    }
                    return back()->withErrors($msg . '.  Please try again');
                } else {
                    return back()->withErrors($e->getMessage());
                }
            }
        } else {
            Session::flash(
                'phoneTypeStatus',
                'Deletion of Phone Type #' . $id . ' cancelled.'
            );
        }
        return redirect(route('phonetype.index'));

    }

    /**
     * Display a listing of the Phone Types.
     *
     * @param string $order Phone Type column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $phoneTypes = PhoneType::orderBy('id')->get();
        } elseif ($order === 'description') {
            $phoneTypes = PhoneType::orderBy('description')->get();
        } else {
            $phoneTypes = PhoneType::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.phonetype.print',
            compact('phoneTypes', 'mmsGlobal')
        );
    }

    /**
     * Setting the sort order and saving it in a session value.
     *
     * @param int $order The column for sorting the table
     *
     * @return \Illuminate\Http\Response
     */
    public function setSortOrder($order)
    {
        if ($order == 4) {
            session(['phoneTypeSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['phoneTypeSortOrder' => 'description']);
        } else {
            session(['phoneTypeSortOrder' => 'id']);
        }
        return redirect('maintenance/phonetype');
    }

    /**
     * Setting the sort order and saving it in a session value.
     *
     * @param Request $request Inbound http request object
     *
     * @return \Illuminate\Http\Response
     */
    public function setSearch(Request $request)
    {
        if (isset($request->id)) {
            session(['phoneTypeSearchLeft' => 'id']);
            session(['phoneTypeSearchRight' => $request->id]);
        }
        if (isset($request->description)) {
            session(["phoneTypeSearchLeft" => 'description']);
            session(
                [
                "phoneTypeSearchRight" => $request->description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->description)
        ) {
            session(['phoneTypeSearchLeft' => '']);
            session(['phoneTypeSearchRight' => '']);
        }
        return redirect('maintenance/phonetype');
    }
}
