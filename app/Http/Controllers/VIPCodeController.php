<?php
/**
 * Application controller to update the VIP Code table
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
use App\VipCodes;
use App\MmsGlobal;

/**
 * Controller class to update the VIP Codes table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class VIPCodeController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'description'=>'required|unique:vip_codes',
    ];

    protected $customMessages = [
        'description.required'  => 'A Description is required',
        'description.unique' => 'You entered a description that '
            . 'is already on file.  Please enter a unique code.',
    ];

    /**
     * Display a listing of the VIP Codes.
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
        $vipCodes = [];

        if (Session::has('vipCodeSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('vipCodeSortOrder') != '') {
                if (session('vipCodeSortOrder') === 'id'
                    || session('vipCodeSortOrder') === 'description'
                    || session('vipCodeSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('vipCodeSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('vipCodeSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('vipCodeSearchLeft') === 'id'
                || session('vipCodeSearchLeft') === 'description'
            ) {
                $filterLeft = session('vipCodeSearchLeft');
                $filterRight = session('vipCodeSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('vipCodeRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('vipCodeRestartValue') != '') {
                $restartValue = session('vipCodeRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = VipCodes::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $vipCodes = VipCodes::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = VipCodes::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = VipCodes::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = VipCodes::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $vipCodes = VipCodes::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $vipCodes = VipCodes::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $vipCodes = VipCodes::orderBy($sortOrder)
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

        // dd($vipCodes, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.vipcode.index',
            compact('vipCodes', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a VIP Code.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.vipcode.create');
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
            $result = VipCodes::create($input);
            Session::flash(
                'vipCodeRestartValue',
                $result->id
            );
            Session::flash(
                'vipCodeStatus',
                'VIP Code #'
                . $result->id
                . ' with a Description of '
                . $result->description
                . ' has been created.'
            );
        }
        return redirect(route('vipcode.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the VIP Code to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vipCode = VipCodes::findOrFail($id);
        $createdBy = $vipCode->createdBy->fullName();
        $lastEditBy = $vipCode->lastEdittedBy->fullName();

        return view(
            'maintenance.vipcode.show',
            compact('vipCode', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the VIP Code to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vipCode = VipCodes::findOrFail($id);
        $createdBy = $vipCode->createdBy->fullName();
        $lastEditBy = $vipCode->lastEdittedBy->fullName();
        return view(
            'maintenance.vipcode.edit',
            compact('vipCode', 'createdBy', 'lastEditBy')
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
                VipCodes::whereId($id)->first()->update($input);
                Session::flash(
                    'vipCodeRestartValue',
                    $id
                );
                Session::flash(
                    'vipCodeStatus',
                    'VIP Code #'
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
                        $msg = "VIP Code code " . $input['id']
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
        return redirect(route('vipcode.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the VIP Code to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $vipCode = VipCodes::findOrFail($id);
                $vipCode->delete();
                Session::flash(
                    'vipCodeStatus',
                    'VIP Code #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'vipCodeStatus',
                        'Cannot delete VIP Code #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete VIP Code.  "
                        . "It is in use on a member's name.";
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
                'vipCodeStatus',
                'Deletion of VIP Code #' . $id . ' cancelled.'
            );
        }
        return redirect(route('vipcode.index'));

    }

    /**
     * Display a listing of the VIP Codes.
     *
     * @param string $order VIP Code column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $vipCodes = VipCodes::orderBy('id')->get();
        } elseif ($order === 'description') {
            $vipCodes = VipCodes::orderBy('description')->get();
        } else {
            $vipCodes = VipCodes::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.vipcode.print',
            compact('vipCodes', 'mmsGlobal')
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
            session(['vipCodeSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['vipCodeSortOrder' => 'description']);
        } else {
            session(['vipCodeSortOrder' => 'id']);
        }
        return redirect('maintenance/vipcode');
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
            session(['vipCodeSearchLeft' => 'id']);
            session(['vipCodeSearchRight' => $request->id]);
        }
        if (isset($request->description)) {
            session(["vipCodeSearchLeft" => 'description']);
            session(
                [
                "vipCodeSearchRight" => $request->description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->description)
        ) {
            session(['vipCodeSearchLeft' => '']);
            session(['vipCodeSearchRight' => '']);
        }
        return redirect('maintenance/vipcode');
    }
}
