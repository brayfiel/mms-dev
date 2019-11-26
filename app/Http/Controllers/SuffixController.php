<?php
/**
 * Application controller to update the Suffixes table
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
use App\Suffix;
use App\MmsGlobal;

/**
 * Controller class to update the Suffix table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class SuffixController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'description'=>'required|unique:suffixes',
    ];

    protected $customMessages = [
        'description.required'  => 'A Description is required',
        'description.unique' => 'You entered a description that '
            . 'is already on file.  Please enter a unique code.',
    ];

    /**
     * Display a listing of the suffixes.
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
        $suffixes = [];

        if (Session::has('suffixSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('suffixSortOrder') != '') {
                if (session('suffixSortOrder') === 'id'
                    || session('suffixSortOrder') === 'description'
                    || session('suffixSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('suffixSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('suffixSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('suffixSearchLeft') === 'id'
                || session('suffixSearchLeft') === 'description'
            ) {
                $filterLeft = session('suffixSearchLeft');
                $filterRight = session('suffixSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('suffixRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('suffixRestartValue') != '') {
                $restartValue = session('suffixRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = Suffix::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $suffixes = Suffix::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = Suffix::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = Suffix::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = Suffix::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $suffixes = Suffix::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $suffixes = Suffix::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $suffixes = Suffix::orderBy($sortOrder)
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

        // dd($suffixes, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.suffix.index',
            compact('suffixes', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a suffix.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.suffix.create');
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
            $result = Suffix::create($input);
            Session::flash(
                'suffixRestartValue',
                $result->id
            );
            Session::flash(
                'suffixStatus',
                'suffix #'
                . $result->id
                . ' with a Description of '
                . $result->description
                . ' has been created.'
            );
        }
        return redirect(route('suffix.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the suffix to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suffix = Suffix::findOrFail($id);
        $createdBy = $suffix->createdBy->fullName();
        $lastEditBy = $suffix->lastEdittedBy->fullName();

        return view(
            'maintenance.suffix.show',
            compact('suffix', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the suffix to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suffix = Suffix::findOrFail($id);
        $createdBy = $suffix->createdBy->fullName();
        $lastEditBy = $suffix->lastEdittedBy->fullName();
        return view(
            'maintenance.suffix.edit',
            compact('suffix', 'createdBy', 'lastEditBy')
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
                Suffix::whereId($id)->first()->update($input);
                Session::flash(
                    'suffixRestartValue',
                    $id
                );
                Session::flash(
                    'suffixStatus',
                    'Suffix #'
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
                        $msg = "Suffix code " . $input['id']
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
        return redirect(route('suffix.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the suffix to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $suffix = Suffix::findOrFail($id);
                $suffix->delete();
                Session::flash(
                    'suffixStatus',
                    'Suffix #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'suffixStatus',
                        'Cannot delete suffix #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete suffix.  "
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
                'suffixStatus',
                'Deletion of Suffix #' . $id . ' cancelled.'
            );
        }
        return redirect(route('suffix.index'));

    }

    /**
     * Display a listing of the suffixes.
     *
     * @param string $order suffix column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $suffixes = Suffix::orderBy('id')->get();
        } elseif ($order === 'description') {
            $suffixes = Suffix::orderBy('description')->get();
        } else {
            $suffixes = Suffix::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.suffix.print',
            compact('suffixes', 'mmsGlobal')
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
            session(['suffixSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['suffixSortOrder' => 'description']);
        } else {
            session(['suffixSortOrder' => 'id']);
        }
        return redirect('maintenance/suffix');
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
            session(['suffixSearchLeft' => 'id']);
            session(['suffixSearchRight' => $request->id]);
        }
        if (isset($request->description)) {
            session(["suffixSearchLeft" => 'description']);
            session(
                [
                "suffixSearchRight" => $request->description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->description)
        ) {
            session(['suffixSearchLeft' => '']);
            session(['suffixSearchRight' => '']);
        }
        return redirect('maintenance/suffix');
    }
}
