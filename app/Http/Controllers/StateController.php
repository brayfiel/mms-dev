<?php
/**
 * Application controller to update the States table
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
use App\State;
use App\MmsGlobal;

/**
 * Controller class to update the States table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class StateController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'state_abbrev'=>'required|unique:states|max:2',
        'state_full'=>'required',
    ];

    protected $customMessages = [
        'state_abbrev.required'  => 'An abbreviation for the state is reuired.',
        'state_abbrev.unique' => 'You entered a state abbreviation that is already '
            . 'on file.  Please enter a unique abbreviation.',
        'state_abbrev.max'  => 'The abbreviation can only be two characters long.',
        'state_full.required' => 'The full name of the state is required',
    ];

    /**
     * Display a listing of the States.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sortOrder = 'state_abbrev';
        $restartValue = 0;
        $filterLeft = '';
        $filterRight = '';
        $rows = 1;
        $page = 0;
        $restart = 0;
        $stateCode = '';
        $stateFull = '';
        $stateUpdate = '';
        $states = [];

        if (Session::has('stateClassSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('stateClassSortOrder') != '') {
                if (session('stateClassSortOrder') === 'id'
                    || session('stateClassSortOrder') === 'state_abbrev'
                    || session('stateClassSortOrder') === 'state_full'
                    || session('stateClassSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('stateClassSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('stateSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('stateSearchLeft') === 'id'
                || session('stateSearchLeft') === 'state_abbrev'
                || session('stateSearchLeft') === 'state_full'
            ) {
                $filterLeft = session('stateSearchLeft');
                $filterRight = session('stateSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('stateRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('stateRestartValue') != '') {
                $restartValue = session('stateRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = State::find($restartValue);
            $stateCode = $restartRow->state_abbrev;
            $stateFull = $restartRow->state_full;
            $stateUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $states = State::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'state_abbrev') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'state_abbrev') {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('state_abbrev', '<=', $stateCode)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'state_full') {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('state_full', '<=', $stateFull)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $stateUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $states = State::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $states = State::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } elseif ($filterLeft === 'state_full') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'state_abbrev') {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('state_abbrev', '<=', $stateCode)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'state_full') {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('state_full', '<=', $stateFull)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = State::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $stateUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $states = State::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $states = State::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $states = State::orderBy($sortOrder)
                ->paginate($this->pageSize);
        }

        $sortText = '';
        if ($sortOrder === 'id') {
            $sortText = 'Ordered by ' . $sortOrder;
        } elseif ($sortOrder === 'state_abbrev') {
            $sortText = 'Ordered by State Abbreviation';
        } elseif ($sortOrder === 'state_full') {
            $sortText = 'Ordered by Full Name of the State';
        } else if ($sortOrder === 'updated_at') {
            $sortText = 'Ordered by Last Updated';
        }

        $searchText = '';
        if ($filterLeft === '') {
        } elseif ($filterLeft === 'id') {
            $searchText = 'Filter: Id is ' . $filterRight;
        } elseif ($filterLeft === 'state_abbrev') {
            $searchText = 'Filter: State Abbreviation Contains ' . $filterRight;
        } elseif ($filterLeft === 'state_full') {
            $searchText = 'Filter: State Full Name Contains ' . $filterRight;
        }

        // dd($states, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.state.index',
            compact('states', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a State.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.state.create');
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
            $result = State::create($input);
            Session::flash(
                'stateRestartValue',
                $result->id
            );
            Session::flash(
                'stateStatus',
                'State #'
                . $result->id
                . ' with a State Abbreviation of '
                . $result->state_abbrev
                . ' has been created.'
            );
        }
        return redirect(route('state.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the State to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::findOrFail($id);
        $createdBy = $state->createdBy->fullName();
        $lastEditBy = $state->lastEdittedBy->fullName();

        return view(
            'maintenance.state.show',
            compact('state', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the State to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::findOrFail($id);
        $createdBy = $state->createdBy->fullName();
        $lastEditBy = $state->lastEdittedBy->fullName();
        return view(
            'maintenance.state.edit',
            compact('state', 'createdBy', 'lastEditBy')
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
                State::whereId($id)->first()->update($input);
                Session::flash(
                    'stateRestartValue',
                    $id
                );
                Session::flash(
                    'stateStatus',
                    'State #'
                        . $id
                        . ' with a State Abbreviation of '
                        . $input['state_abbrev']
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
                        $msg = "State abbreviation " . $input['state_abbrev']
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
        return redirect(route('state.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the State to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $state = State::findOrFail($id);
                $state->delete();
                Session::flash(
                    'stateStatus',
                    'State #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'stateStatus',
                        'Cannot delete state #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete state.  It is in "
                            . "use on a member's address or in the zip code table";
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
                'stateStatus',
                'Deletion of state #' . $id . ' cancelled.'
            );
        }
        return redirect(route('state.index'));

    }

    /**
     * Display a listing of the States.
     *
     * @param string $order State column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $states = State::orderBy('id')->get();
        } elseif ($order === 'classcode') {
            $states = State::orderBy('state_abbrev')->get();
        } elseif ($order === 'state_full') {
            $states = State::orderBy('state_full')->get();
        } else {
            $states = State::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.state.print',
            compact('states', 'mmsGlobal')
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
            session(['stateClassSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['stateClassSortOrder' => 'state_full']);
        } elseif ($order == 2) {
            session(['stateClassSortOrder' => 'state_abbrev']);
        } else {
            session(['stateClassSortOrder' => 'id']);
        }
        return redirect('maintenance/state');
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
            session(['stateSearchLeft' => 'id']);
            session(['stateSearchRight' => $request->id]);
        }
        if (isset($request->state_abbrev)) {
            session(['stateSearchRight' => 'state_abbrev']);
            session(['stateSearchRight' => $request->state_abbrev]);
        }
        if (isset($request->state_full)) {
            session(['stateSearchRight' => 'state_full']);
            session(
                [
                'stateSearchRight' => $request->state_full
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->state_abbrev)
            && !isset($request->state_full)
        ) {
            session(['stateSearchLeft' => '']);
            session(['stateSearchRight' => '']);
        }
        return redirect('maintenance/state');
    }
}
