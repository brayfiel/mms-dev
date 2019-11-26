<?php
/**
 * Application controller to update the Surname table
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
use App\Surname;
use App\MmsGlobal;

/**
 * Controller class to update the Surname table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class SurnameController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'description'=>'required|unique:surnames',
    ];

    protected $customMessages = [
        'description.required'  => 'A Description is required',
        'description.unique' => 'You entered a description that '
            . 'is already on file.  Please enter a unique code.',
    ];

    /**
     * Display a listing of the Surnames.
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
        $surnames = [];

        if (Session::has('surnameSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('surnameSortOrder') != '') {
                if (session('surnameSortOrder') === 'id'
                    || session('surnameSortOrder') === 'description'
                    || session('surnameSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('surnameSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('surnameSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('surnameSearchLeft') === 'id'
                || session('surnameSearchLeft') === 'description'
            ) {
                $filterLeft = session('surnameSearchLeft');
                $filterRight = session('surnameSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('surnameRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('surnameRestartValue') != '') {
                $restartValue = session('surnameRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = Surname::find($restartValue);
            $mtDescription = $restartRow->description;
            $mtUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $surnames = Surname::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = Surname::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = Surname::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mtDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = Surname::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mtUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $surnames = Surname::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $surnames = Surname::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $surnames = Surname::orderBy($sortOrder)
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

        // dd($surnames, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.surname.index',
            compact('surnames', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a Surname.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.surname.create');
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
            $result = Surname::create($input);
            Session::flash(
                'surnameRestartValue',
                $result->id
            );
            Session::flash(
                'surnameStatus',
                'Surname #'
                . $result->id
                . ' with a Description of '
                . $result->description
                . ' has been created.'
            );
        }
        return redirect(route('surname.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the Surname to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surname = Surname::findOrFail($id);
        $createdBy = $surname->createdBy->fullName();
        $lastEditBy = $surname->lastEdittedBy->fullName();

        return view(
            'maintenance.surname.show',
            compact('surname', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the Surname to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surname = Surname::findOrFail($id);
        $createdBy = $surname->createdBy->fullName();
        $lastEditBy = $surname->lastEdittedBy->fullName();
        return view(
            'maintenance.surname.edit',
            compact('surname', 'createdBy', 'lastEditBy')
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
                Surname::whereId($id)->first()->update($input);
                Session::flash(
                    'surnameRestartValue',
                    $id
                );
                Session::flash(
                    'surnameStatus',
                    'Surname #'
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
                        $msg = "Surname code " . $input['id']
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
        return redirect(route('surname.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the Surname to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $surname = Surname::findOrFail($id);
                $surname->delete();
                Session::flash(
                    'surnameStatus',
                    'Surname #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'surnameStatus',
                        'Cannot delete surname #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete surname.  "
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
                'surnameStatus',
                'Deletion of Surname #' . $id . ' cancelled.'
            );
        }
        return redirect(route('surname.index'));

    }

    /**
     * Display a listing of the Surnames.
     *
     * @param string $order Surname column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $surnames = Surname::orderBy('id')->get();
        } elseif ($order === 'description') {
            $surnames = Surname::orderBy('description')->get();
        } else {
            $surnames = Surname::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.surname.print',
            compact('surnames', 'mmsGlobal')
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
            session(['surnameSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['surnameSortOrder' => 'description']);
        } else {
            session(['surnameSortOrder' => 'id']);
        }
        return redirect('maintenance/surname');
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
            session(['surnameSearchLeft' => 'id']);
            session(['surnameSearchRight' => $request->id]);
        }
        if (isset($request->description)) {
            session(["surnameSearchLeft" => 'description']);
            session(
                [
                "surnameSearchRight" => $request->description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->description)
        ) {
            session(['surnameSearchLeft' => '']);
            session(['surnameSearchRight' => '']);
        }
        return redirect('maintenance/surname');
    }
}
