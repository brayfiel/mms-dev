<?php
/**
 * Application controller to update the Miscellaneous Config data
 * in the MmsGlobal table
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
use App\MmsGlobal;

/**
 * Controller class to update the Organization data in the MmsGlobal table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class MiscController extends Controller
{
    protected $pageSize = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchText = '';
        $sortText = '';
        $input = [];
        $mmsGlobals = MmsGlobal::orderBy('id')->paginate($this->pageSize);
        if ($mmsGlobals->count() < 1) {
            $input['app_name'] = 'Member Management Services';
            $input['app_name_abbrev'] = 'MMS';
            $input['org_name'] = 'To Be Entered';
            $input['org_name_abbrev'] = 'To Be Entered';
            $input['created_by_id'] = Auth::user()->id;
            $input['last_editted_by_id'] = Auth::user()->id;
            $result = MmsGlobal::create($input);
            $mmsGlobals = MmsGlobal::orderBy('id')->paginate($this->pageSize);
        }
        return view(
            'maintenance.misc.index',
            compact('mmsGlobals', 'searchText', 'sortText')
        );
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id id of record to be edited

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $misc = MmsGlobal::findOrFail($id);
        return view('maintenance.misc.edit', compact('misc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request incoming updates from the blade
     * @param int                      $id      id of record to update
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($input['submit'] !== "Cancel") {
            // dd($input);
            // "permanent_pew_year" => "2000"

            $input['last_editted_by_id'] = Auth::user()->id;
            try
            {
                $result = MmsGlobal::whereId($id)->first()->update($input);
                $updated = MmsGlobal::findOrFail($id);
                Session::flash(
                    'yahrzeitRestartValue',
                    $id
                );
                Session::flash(
                    'yahrzeitStatus',
                    'Application '
                        . $updated->app_name_abbrev
                        . ' Organization '
                        . $updated->org_name_abbrev
                        . ' has been updated.'
                );
            } catch(\Exception $e) {
                $msg = '';
                if ($e->errorInfo[0] === "23000") {
                    if ($e->errorInfo[1] === 1048) {
                        $msg = str_replace("Column '", "", $e->errorInfo[2]);
                        $msg = str_replace("'", "", $msg);
                        $msg = str_replace("_", " ", $msg);
                        $msg = str_replace("null", "empty", $msg);
                        $msg = ucfirst($msg);
                    } elseif ($e->errorInfo[1] === 1062) {
                        $msg = "Yrganization data is currently being updated "
                        . $input['mailing_class_code']
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
        return redirect(route('misc.index'));
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    /**
     * Display a listing of the Yahrzeit configuration.
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll()
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        return view('maintenance.misc.print', compact('mmsGlobal'));
    }
}
