<?php
/**
 * Application controller to update the Zip Code table
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
use App\ZipCode;
use App\MmsGlobal;
use App\State;

/**
 * Controller class to update the Zip Codes table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class ZipCodeController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'zip_code'=>'required|size:5',
        'city'=>'required',
        'state'=>'required|exists:states,state_abbrev',
    ];

    protected $customMessages = [
        'zip_code.required'  => 'A Zip Code is required',
        'zip_code.size' => 'This Zip Code must be 5 characters in length.',
        'city' => 'A city is rquired.',
        'state' => 'You must select a valid state or territory.',
    ];

    /**
     * Display a listing of the Zip Codes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sortOrder = 'zip_code';
        $sortText = 'Ordered by Zip Code';
        $restartValue = 0;
        $filterLeft = '';
        $filterRight = '';
        $rows = 1;
        $page = 0;
        $restart = 0;
        $mtCode = '';
        $mtDescription = '';
        $mtUpdate = '';
        $zipCodes = [];

        if (Session::has('zipCodeSortOrder')) {
            // if it's not one of the 4 valid columns set it to the zip code column
            if (session('zipCodeSortOrder') != '') {
                if (session('zipCodeSortOrder') === 'id') {
                    $sortOrder = 'id';
                    $sortText = 'Ordered by Id';
                } elseif (session('zipCodeSortOrder') === 'zip_code') {
                    $sortOrder = 'zip_code';
                    $sortText = 'Ordered by Zip Code';
                } elseif (session('zipCodeSortOrder') === 'city') {
                    $sortOrder = 'city';
                    $sortText = 'Ordered by City';
                } elseif (session('zipCodeSortOrder') === 'state') {
                    $sortOrder = 'state';
                    $sortText = 'Ordered by State';
                } elseif (session('zipCodeSortOrder') === 'updated_at') {
                    $sortOrder = 'updated_at';
                    $sortText = 'Ordered by Last Updated';
                } else {
                    $sortOrder = 'zip_code';
                    $sortText = 'Ordered by Zip Code';
                }
            }
        }
        if (Session::has('zipCodeSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('zipCodeSearchLeft') === 'id'
                || session('zipCodeSearchLeft') === 'zip_code'
                || session('zipCodeSearchLeft') === 'city'
                || session('zipCodeSearchLeft') === 'state'
            ) {
                // dd(session('zipCodeSearchLeft'), session('zipCodeSearchRight'));
                $filterLeft = session('zipCodeSearchLeft');
                $filterRight = session('zipCodeSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('zipCodeRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('zipCodeRestartValue') != '') {
                $restartValue = session('zipCodeRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = ZipCode::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $zipCodes = ZipCode::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'zip_code'
            || $filterLeft === 'city'
            || $filterLeft === 'state'
        ) {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = ZipCode::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = ZipCode::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = ZipCode::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $zipCodes = ZipCode::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $zipCodes = ZipCode::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $zipCodes = ZipCode::orderBy($sortOrder)
                ->paginate($this->pageSize);
        }

        $searchText = '';
        if ($filterLeft === '') {
        } elseif ($filterLeft === 'id') {
            $searchText = 'Filter: Id is ' . $filterRight;
        } elseif ($filterLeft === 'description') {
            $searchText = 'Filter: Description Contains ' . $filterRight;
        }

        // dd($zipCodes, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.zipcode.index',
            compact('zipCodes', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a ZIP Code.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::orderBy('state_full')->get();
        return view('maintenance.zipcode.create', compact('states'));
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
            $result = ZipCode::create($input);
            Session::flash(
                'zipCodeRestartValue',
                $result->id
            );
            Session::flash(
                'zipCodeStatus',
                'ZIP Code '
                . $result->zip_code
                . ' with a city and state of '
                . $result->city . ', ' . $result->state
                . ' has been created.'
            );
        }
        return redirect(route('zipcode.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the ZIP Code to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zipCode = ZipCode::findOrFail($id);
        $createdBy = $zipCode->createdBy->fullName();
        $lastEditBy = $zipCode->lastEdittedBy->fullName();

        return view(
            'maintenance.zipcode.show',
            compact('zipCode', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the ZIP Code to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zipCode = ZipCode::findOrFail($id);
        $states = State::orderBy('state_full')->get();
        $createdBy = $zipCode->createdBy->fullName();
        $lastEditBy = $zipCode->lastEdittedBy->fullName();
        return view(
            'maintenance.zipcode.edit',
            compact('zipCode', 'states', 'createdBy', 'lastEditBy')
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
            // try
            // {
            $this->validate($request, $this->rules, $this->customMessages);
            ZipCode::whereId($id)->first()->update($input);
            Session::flash(
                'zipCodeRestartValue',
                $id
            );
            Session::flash(
                'zipCodeStatus',
                'ZIP Code '
                    . $input['zip_code']
                    . ' with a city and state of '
                    . $input['city'] . ', ' . $input['state']
                    . ' has been updated.'
            );
            // } catch(Exception $e) {
            //     $msg = '';
            //     // dd($e);
            //     if ($e->errorInfo[0] === "23000") {
            //         if ($e->errorInfo[1] === 1048) {
            //             $msg = str_replace("Column '", "", $e->errorInfo[2]);
            //             $msg = str_replace("'", "", $msg);
            //             $msg = str_replace("_", " ", $msg);
            //             $msg = str_replace("null", "empty", $msg);
            //             $msg = ucfirst($msg);
            //         } elseif ($e->errorInfo[1] === 1062) {
            //             $msg = "ZIP Code code " . $input['id']
            //             . " is already in use";
            //         } else {
            //             $msg = $e->errorInfo[2];
            //         }
            //         return back()->withErrors($msg . '.  Please try again');
            //     } else {
            //         return back()->withErrors($e->errorInfo[2]);
            //     }
            // }
        }
        return redirect(route('zipcode.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the ZIP Code to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $zipCode = ZipCode::findOrFail($id);
                $zipCode->delete();
                Session::flash(
                    'zipCodeStatus',
                    'ZIP Code #' . $id . ' has been deleted.'
                );
            }
            catch (Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'zipCodeStatus',
                        'Cannot delete ZIP Code #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete ZIP Code.  "
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
                'zipCodeStatus',
                'Deletion of ZIP Code #' . $id . ' cancelled.'
            );
        }
        return redirect(route('zipcode.index'));

    }

    /**
     * Display a listing of the ZIP Codes.
     *
     * @param string $order ZIP Code column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        set_time_limit(600);
        if ($order != 'id'
            && $order != 'zip_code'
            && $order != 'city'
            && $order != 'state'
            && $order != 'updated_at'
        ) {
            $order = 'id';
        }
        $zipCodes = ZipCode::orderBy($order)->get();
        return view(
            'maintenance.zipcode.print',
            compact('zipCodes', 'mmsGlobal')
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
        if ($order == 5) {
            session(['zipCodeSortOrder' => 'updated_at']);
        } elseif ($order == 4) {
            session(['zipCodeSortOrder' => 'state']);
        } elseif ($order == 3) {
            session(['zipCodeSortOrder' => 'city']);
        } elseif ($order == 2) {
            session(['zipCodeSortOrder' => 'zip_code']);
        } else {
            session(['zipCodeSortOrder' => 'id']);
        }
        return redirect('maintenance/zipcode');
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
            session(['zipCodeSearchLeft' => 'id']);
            session(['zipCodeSearchRight' => $request->id]);
        } elseif (isset($request->zipCode)) {
            session(["zipCodeSearchLeft" => 'zip_code']);
            session(["zipCodeSearchRight" => $request->zipCode]);
        } elseif (isset($request->city)) {
            session(["zipCodeSearchLeft" => 'city']);
            session(["zipCodeSearchRight" => $request->city]);
        } elseif (isset($request->state)) {
            session(["zipCodeSearchLeft" => 'state']);
            session(["zipCodeSearchRight" => $request->state]);
        } else {
            session(['zipCodeSearchLeft' => '']);
            session(['zipCodeSearchRight' => '']);
        }
        return redirect('maintenance/zipcode');
    }
}
