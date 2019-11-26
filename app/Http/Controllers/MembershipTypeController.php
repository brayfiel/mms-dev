<?php
/**
 * Application controller to update the Membership Type table
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
use App\MembershipType;
use App\MmsGlobal;

/**
 * Controller class to update the Membership Type table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class MembershipTypeController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'description'=>'required|unique:membership_types',
    ];

    protected $customMessages = [
        'description.required'  => 'A Description is required',
        'description.unique' => 'You entered a description that '
            . 'is already on file.  Please enter a unique code.',
    ];

    /**
     * Display a listing of the Membership Types.
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
        $membershipTypes = [];

        if (Session::has('membershipTypeSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('membershipTypeSortOrder') != '') {
                if (session('membershipTypeSortOrder') === 'id'
                    || session('membershipTypeSortOrder') === 'description'
                    || session('membershipTypeSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('membershipTypeSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('membershipTypeSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('membershipTypeSearchLeft') === 'id'
                || session('membershipTypeSearchLeft') === 'description'
            ) {
                $filterLeft = session('membershipTypeSearchLeft');
                $filterRight = session('membershipTypeSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('membershipTypeRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('membershipTypeRestartValue') != '') {
                $restartValue = session('membershipTypeRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = MembershipType::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $membershipTypes = MembershipType::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = MembershipType::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = MembershipType::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = MembershipType::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $membershipTypes = MembershipType::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $membershipTypes = MembershipType::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $membershipTypes = MembershipType::orderBy($sortOrder)
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

        // dd($membershipTypes, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.membershiptype.index',
            compact('membershipTypes', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a Membership Type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.membershiptype.create');
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
            $result = MembershipType::create($input);
            Session::flash(
                'membershipTypeRestartValue',
                $result->id
            );
            Session::flash(
                'membershipTypeStatus',
                'Membership Type #'
                . $result->id
                . ' with a Description of '
                . $result->description
                . ' has been created.'
            );
        }
        return redirect(route('membershiptype.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the Membership Type to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membershipType = MembershipType::findOrFail($id);
        $createdBy = $membershipType->createdBy->fullName();
        $lastEditBy = $membershipType->lastEdittedBy->fullName();

        return view(
            'maintenance.membershiptype.show',
            compact('membershipType', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the Membership Type to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membershipType = MembershipType::findOrFail($id);
        $createdBy = $membershipType->createdBy->fullName();
        $lastEditBy = $membershipType->lastEdittedBy->fullName();
        return view(
            'maintenance.membershiptype.edit',
            compact('membershipType', 'createdBy', 'lastEditBy')
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
                MembershipType::whereId($id)->first()->update($input);
                Session::flash(
                    'membershipTypeRestartValue',
                    $id
                );
                Session::flash(
                    'membershipTypeStatus',
                    'Membership Type #'
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
                        $msg = "Membership Type code " . $input['id']
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
        return redirect(route('membershiptype.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the Membership Type to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $membershipType = MembershipType::findOrFail($id);
                $membershipType->delete();
                Session::flash(
                    'membershipTypeStatus',
                    'Membership Type #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'membershipTypeStatus',
                        'Cannot delete membership type #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete membership type.  "
                        . "It is in use on a membership.";
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
                'membershipTypeStatus',
                'Deletion of Membership Type #' . $id . ' cancelled.'
            );
        }
        return redirect(route('membershiptype.index'));

    }

    /**
     * Display a listing of the Membership Types.
     *
     * @param string $order Membership Type column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $membershipTypes = MembershipType::orderBy('id')->get();
        } elseif ($order === 'description') {
            $membershipTypes = MembershipType::orderBy('description')->get();
        } else {
            $membershipTypes = MembershipType::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.membershiptype.print',
            compact('membershipTypes', 'mmsGlobal')
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
            session(['membershipTypeSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['membershipTypeSortOrder' => 'description']);
        } else {
            session(['membershipTypeSortOrder' => 'id']);
        }
        return redirect('maintenance/membershiptype');
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
            session(['membershipTypeSearchLeft' => 'id']);
            session(['membershipTypeSearchRight' => $request->id]);
        }
        if (isset($request->description)) {
            session(["membershipTypeSearchLeft" => 'description']);
            session(
                [
                "membershipTypeSearchRight" => $request->description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->description)
        ) {
            session(['membershipTypeSearchLeft' => '']);
            session(['membershipTypeSearchRight' => '']);
        }
        return redirect('maintenance/membershiptype');
    }
}
