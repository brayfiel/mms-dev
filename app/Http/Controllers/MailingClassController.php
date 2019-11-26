<?php
/**
 * Application controller to update the Mailing Class table
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
use App\MailingClass;
use App\MmsGlobal;

/**
 * Controller class to update the Mailing Class table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class MailingClassController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'mailing_class_code' => 'required|unique:mailing_classes|max:2',
        'description'=>'required',
    ];

    protected $customMessages = [
        'mailing_class_code.required' => 'A Mailing Class Code is required.',
        'mailing_class_code.unique' => 'You entered a Mailing Class Code that '
        . 'is already on file.  Please enter a unique code.',
        'mailing_class_code.max' => 'The Mailing Class Code can be no longer '
        . 'than 2 characters.  Please re-enter.',
        'description.required'  => 'A Description is required',
    ];

    /**
     * Display a listing of the Mailing Classes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sortOrder = 'mailing_class_code';
        $restartValue = 0;
        $filterLeft = '';
        $filterRight = '';
        $rows = 1;
        $page = 0;
        $restart = 0;
        $mcCode = '';
        $mcDescription = '';
        $mcUpdate = '';
        $mailingClasses = [];

        if (Session::has('mailingClassSortOrder')) {
            // if it's not one of the 4 valid columns set it to the id column
            if (session('mailingClassSortOrder') != '') {
                if (session('mailingClassSortOrder') === 'id'
                    || session('mailingClassSortOrder') === 'mailing_class_code'
                    || session('mailingClassSortOrder') === 'description'
                    || session('mailingClassSortOrder') === 'updated_at'
                ) {
                    $sortOrder = session('mailingClassSortOrder');
                } else {
                    $sortOrder = 'id';
                }
            }
        }
        if (Session::has('mailingClassSearchLeft')) {
            // if it's not one of the three valid
            // columns set left and right to it to ''
            if (session('mailingClassSearchLeft') === 'id'
                || session('mailingClassSearchLeft') === 'mailing_class_code'
                || session('mailingClassSearchLeft') === 'description'
            ) {
                $filterLeft = session('mailingClassSearchLeft');
                $filterRight = session('mailingClassSearchRight');
            } else {
                $filterLeft = '';
                $filterRight = '';
            }
        }
        if (Session::has('mailingClassRestartValue')) {
            // if it's set to '' then set $restartValue to 0
            if (session('mailingClassRestartValue') != '') {
                $restartValue = session('mailingClassRestartValue');
            } else {
                $restartValue = 0;
            }
        }

        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($restartValue > 0) {
            $restartRow = MailingClass::find($restartValue);
            $mcCode = $restartRow->mailing_class_code;
            $mcDescription = $restartRow->description;
            $mcUpdate =  $restartRow->update_at;
        }

        if ($filterLeft === 'id') {
            //only one record returned no need to calculate a page number
            $mailingClasses = MailingClass::orderBy($sortOrder)
                ->where($filterLeft, '=', $filterRight)
                ->paginate($this->pageSize);
        } elseif ($filterLeft === 'mailing_class_code') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'mailing_class_code') {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('mailing_class_code', '<=', $mcCode)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mcDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mcUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $mailingClasses = MailingClass::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $mailingClasses = MailingClass::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } elseif ($filterLeft === 'description') {
            if ($restartValue != 0) {
                if ($sortOrder === 'id') {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('id', '<=', $restartValue)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'mailing_class_code') {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('mailing_class_code', '<=', $mcCode)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } elseif ($sortOrder === 'description') {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where('description', '<=', $mcDescription)
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                } else {
                    $rows = MailingClass::orderBy($sortOrder)
                        ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                        ->where(
                            'update_at',
                            '<=',
                            'STR_TO_DATE("' . $mcUpdate . '", YYYY-MM-DD HH:MI:SS'
                        )
                        ->count();
                    $page = intval($rows / $this->pageSize) + 1;
                }
                $mailingClasses = MailingClass::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize, ['*'], 'page', $page);
            } else {
                $mailingClasses = MailingClass::orderBy($sortOrder)
                    ->where($filterLeft, 'LIKE', '%' . $filterRight . '%')
                    ->paginate($this->pageSize);
            }
        } else {
            $mailingClasses = MailingClass::orderBy($sortOrder)
                ->paginate($this->pageSize);
        }

        $sortText = '';
        if ($sortOrder === 'id') {
            $sortText = 'Ordered by ' . $sortOrder;
        } elseif ($sortOrder === 'mailing_class_code') {
            $sortText = 'Ordered by Class Code';
        } elseif ($sortOrder === 'description') {
            $sortText = 'Ordered by Description';
        } else if ($sortOrder === 'updated_at') {
            $sortText = 'Ordered by Last Updated';
        }

        $searchText = '';
        if ($filterLeft === '') {
        } elseif ($filterLeft === 'id') {
            $searchText = 'Filter: Id is ' . $filterRight;
        } elseif ($filterLeft === 'mailing_class_code') {
            $searchText = 'Filter: Class Code Contains ' . $filterRight;
        } elseif ($filterLeft === 'mailing_class_description') {
            $searchText = 'Filter: Description Contains ' . $filterRight;
        }

        // dd($mailingClasses, $mmsGlobal, $searchText, $sortText);
        return view(
            'maintenance.mailingclass.index',
            compact('mailingClasses', 'mmsGlobal', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a Mailing Class.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance.mailingclass.create');
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
            $result = MailingClass::create($input);
            Session::flash(
                'mailingClassRestartValue',
                $result->id
            );
            Session::flash(
                'mailingClassStatus',
                'Mailing Class #'
                . $result->id
                . ' with a Mailing Class Code of '
                . $result->mailing_class_code
                . ' has been created.'
            );
        }
        return redirect(route('mailingclass.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id id of the mailing class to be displayed
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mailingClass = MailingClass::findOrFail($id);
        $createdBy = $mailingClass->createdBy->fullName();
        $lastEditBy = $mailingClass->lastEdittedBy->fullName();

        return view(
            'maintenance.mailingclass.show',
            compact('mailingClass', 'createdBy', 'lastEditBy')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of the mailing class to be edited
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mailingClass = MailingClass::findOrFail($id);
        $createdBy = $mailingClass->createdBy->fullName();
        $lastEditBy = $mailingClass->lastEdittedBy->fullName();
        return view(
            'maintenance.mailingclass.edit',
            compact('mailingClass', 'createdBy', 'lastEditBy')
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
                MailingClass::whereId($id)->first()->update($input);
                Session::flash(
                    'mailingClassRestartValue',
                    $id
                );
                Session::flash(
                    'mailingClassStatus',
                    'Mailing Class #'
                        . $id
                        . ' with a Mailing Class Code of '
                        . $input['mailing_class_code']
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
                        $msg = "Mailing class code " . $input['mailing_class_code']
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
        return redirect(route('mailingclass.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request inbound http request
     * @param int     $id      id of the Mailing class to be deleted
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            try
            {
                $mailingClass = MailingClass::findOrFail($id);
                $mailingClass->delete();
                Session::flash(
                    'mailingClassStatus',
                    'Mailing Class #' . $id . ' has been deleted.'
                );
            }
            catch (\Exception $e)
            {
                $msg = 'Problem encountered.  Deletion attempt failed.';
                if (strpos($e->getMessage(), "o query results") > 0) {
                    Session::flash(
                        'mailingClassStatus',
                        'Cannot delete mailing class #' . $id
                        . ' it seems to have been deleted already'
                    );
                } elseif ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1451) {
                        $msg = "Cannot delete mailing class.  "
                        . "It is in use on a member's address.";
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
                'mailingClassStatus',
                'Deletion of Mailing Class #' . $id . ' cancelled.'
            );
        }
        return redirect(route('mailingclass.index'));

    }

    /**
     * Display a listing of the Mailing Classes.
     *
     * @param string $order Mailing class column to sort the report on
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll($order)
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        if ($order === 'id') {
            $mailingClasses = MailingClass::orderBy('id')->get();
        } elseif ($order === 'classcode') {
            $mailingClasses = MailingClass::orderBy('mailing_class_code')->get();
        } elseif ($order === 'description') {
            $mailingClasses = MailingClass::orderBy('description')->get();
        } else {
            $mailingClasses = MailingClass::orderBy('updated_at')->get();
        }
        return view(
            'maintenance.mailingclass.print',
            compact('mailingClasses', 'mmsGlobal')
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
            session(['mailingClassSortOrder' => 'updated_at']);
        } elseif ($order == 3) {
            session(['mailingClassSortOrder' => 'description']);
        } elseif ($order == 2) {
            session(['mailingClassSortOrder' => 'mailing_class_code']);
        } else {
            session(['mailingClassSortOrder' => 'id']);
        }
        return redirect('maintenance/mailingclass');
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
            session(['mailingClassSearchLeft' => 'id']);
            session(['mailingClassSearchRight' => $request->id]);
        }
        if (isset($request->mailing_class_code)) {
            session(["mailingClassSearchLeft" => 'mailing_class_code']);
            session(['mailingClassSearchRight' => $request->mailing_class_code]);
        }
        if (isset($request->mailing_class_description)) {
            session(["mailingClassSearchLeft" => 'mailing_class_description']);
            session(
                [
                "mailingClassSearchRight" => $request->mailing_class_description
                ]
            );
        }
        if (!isset($request->id)
            && !isset($request->mailing_class_code)
            && !isset($request->mailing_class_description)
        ) {
            session(['mailingClassSearchLeft' => '']);
            session(['mailingClassSearchRight' => '']);
        }
        return redirect('maintenance/mailingclass');
    }
}
