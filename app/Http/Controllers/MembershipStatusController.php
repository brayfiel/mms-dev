<?php
/**
 * Application controller to update the Membership Status table
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
use App\MembershipStatus;
use App\MmsGlobal;

/**
 * Controller class to update the Membership Status table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class MembershipStatusController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'description'=>'required|unique:membership_statuses',
    ];

    protected $customMessages = [
        'description.required'  => 'A Description is required',
        'description.unique' => 'You entered a description that '
            . 'is already on file.  Please enter a unique code.',
    ];

    /**
     * Display a listing of the Membership Statuses.
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
        $membershipStatuses = [];

        if (Session::has('membershipStatusSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('membershipStatusSortOrder') != '') {
                if (session('membershipStatusSortOrder') === 'id'
                    || session('membershipStatusSortOrder') === 'description'
                    || session('membershipStatusSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('membershipStatusSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('membershipStatusSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('membershipStatusSearchLeft') === 'id'
                || session('membershipStatusSearchLeft') === 'description'
            ) {
                $filterLeft = session('membershipStatusSearchLeft');
                $filterRight = session('membershipStatusSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('membershipStatusRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('membershipStatusRestartValue') != '') {
                $restartValue = session('membershipStatusRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = MembershipStatus::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $membershipStatuses = MembershipStatus::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = MembershipStatus::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = MembershipStatus::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = MembershipStatus::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $membershipStatuses = MembershipStatus::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $membershipStatuses = MembershipStatus::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $membershipStatuses = MembershipStatus::orderBy($sortOrder)
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

        // dd($membershipStatuses, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.membershipstatus.index',
            compact('membershipStatuses', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a Membership Status.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.membershipstatus.create');
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
            $result = MembershipStatus::create($input);
            Session::flash(
                'membershipStatusRestartValue',
                $result->id
            );
            Session::flash(
                'membershipStatusStatus',
                'Membership Status #'
                . $result->id
                . ' with a Description of '
                . $result->description
                . ' has been created.'
            );
        }
        return redirect(route('membershipstatus.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the Membership Status to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membershipStatus = MembershipStatus::findOrFail($id);
        $createdBy = $membershipStatus->createdBy->fullName();
        $lastEditBy = $membershipStatus->lastEdittedBy->fullName();

        return view(
            'maintenance.membershipstatus.show',
            compact('membershipStatus', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the Membership Status to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membershipStatus = MembershipStatus::findOrFail($id);
        $createdBy = $membershipStatus->createdBy->fullName();
        $lastEditBy = $membershipStatus->lastEdittedBy->fullName();
        return view(
            'maintenance.membershipstatus.edit',
            compact('membershipStatus', 'createdBy', 'lastEditBy')
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
                MembershipStatus::whereId($id)->first()->update($input);
                Session::flash(
                    'membershipStatusRestartValue',
                    $id
                );
                Session::flash(
                    'membershipStatusStatus',
                    'Membership Status #'
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
                        $msg = "Membership Status code " . $input['id']
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
        return redirect(route('membershipstatus.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the Membership Status to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $membershipStatus = MembershipStatus::findOrFail($id);
                $membershipStatus->delete();
                Session::flash(
                    'membershipStatusStatus',
                    'Membership Status #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'membershipStatusStatus',
                        'Cannot delete membership status #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete membership status.  "
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
                'membershipStatusStatus',
                'Deletion of Membership Status #' . $id . ' cancelled.'
            );
        }
        return redirect(route('membershipstatus.index'));

    }

    /**
     * Display a listing of the Membership Statuses.
     *
     * @param string $order Membership Status column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $membershipStatuses = MembershipStatus::orderBy('id')->get();
        } elseif ($order === 'description') {
            $membershipStatuses = MembershipStatus::orderBy('description')->get();
        } else {
            $membershipStatuses = MembershipStatus::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.membershipstatus.print',
            compact('membershipStatuses', 'mmsGlobal')
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
            session(['membershipStatusSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['membershipStatusSortOrder' => 'description']);
        } else {
            session(['membershipStatusSortOrder' => 'id']);
        }
        return redirect('maintenance/membershipstatus');
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
            session(['membershipStatusSearchLeft' => 'id']);
            session(['membershipStatusSearchRight' => $request->id]);
        }
        if (isset($request->description)) {
            session(["membershipStatusSearchLeft" => 'description']);
            session(
                [
                "membershipStatusSearchRight" => $request->description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->description)
        ) {
            session(['membershipStatusSearchLeft' => '']);
            session(['membershipStatusSearchRight' => '']);
        }
        return redirect('maintenance/membershipstatus');
    }
}
