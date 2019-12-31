<?php
/**
 * Application controller to update the Organization data in the MmsGlobal table
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
use App\State;

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
class OrganizationController extends Controller
{
    protected $pageSize = 10;

    protected $rules = [
        'app_name' => 'required|max:60',
        'app_name_abbrev' => 'required|max:12',
        'org_name' => 'required|max:60',
        'org_name_abbrev' => 'required|max:12',
        'address_1' => 'max:60',
        'address_2' => 'max:60',
        'city' => 'max:60',
        'state_id' => 'exists:states,id',
        'zip_code_id' => 'max:5',
        'zip_code_ext' => 'max:4',
        'telephone' => 'max:10',
    ];

    protected $customMessages = [
        'app_name.required' => 'An application name is required.',
        'app_name.max' => 'The application name can only be 60 characters long.',
        'app_name_abbrev.required' => 'The abbreviation for the application name ' .
            'is required.',
        'app_name_abbrev.max' => 'The abbreviation for the application name can ' .
            'only be 12 characters long.',
        'org_name.required' => 'The organization name is required.',
        'org_name.max' => 'The organization name can only be 60 characters long.',
        'org_name_abbrev.required' => 'The abbreviation for the organization ' .
            ' name is required.',
        'org_name_abbrev.max' => 'The abbreviation for the organization name ' .
            'can only be 12 characters long.',
        'address_1.max' => 'The first line of the street address can only be 60 ' .
            'characters long.',
        'address_2.max' => 'The second line of the street address can only be 60 ' .
            'characters long.',
        'city.max' => 'The city can only be 60 characters long.',
        'state_id.exists' => 'The selected state is no longer valid',
        'zip_code_id.max' => 'The zip code can only be 5 characters long.',
        'zip_code_ext.max' => 'The zip code extension can only be 4 characters ' .
            'long.',
        'telephone.max' => 'The telephone number can only be 10 characters long.',
        ];

    /**
     * Display a listing of the Organizations.
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
            'maintenance.organization.index',
            compact('mmsGlobals', 'searchText', 'sortText')
        );
    }

    /**
     * Show the form for creating a new application/organization.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::orderBy('state_full')->get();
        return view('maintenance.organization.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request data received from the create blade
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
            $result = MmsGlobal::create($input);
            Session::flash(
                'organizationRestartValue',
                $result->id
            );
            Session::flash(
                'organizationStatus',
                'Application Name '
                . $result->app_name_abbrev
                . ' Organization Name '
                . $result->org_name_abbrev
                . ' has been created.'
            );
        }
        return redirect('/maintenance/organization');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id Id of the MmsGlobal record to be displayed for editting
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organization = MmsGlobal::findOrFail($id);
        $states = State::orderBy('state_full')->get();
        return view(
            'maintenance.organization.edit',
            compact('organization', 'states')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request inbound data from the edit blade
     * @param int                      $id      id of the record to be updated
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
                MmsGlobal::whereId($id)->first()->update($input);
                Session::flash(
                    'organizationRestartValue',
                    $id
                );
                Session::flash(
                    'organizationStatus',
                    'Application '
                        . $input['app_name_abbrev']
                        . ' Organization '
                        . $input['org_name_abbrev']
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
                        $msg = "Organization data is currently being updated "
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
        return redirect(route('organization.index'));
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param int $id Id of the MmsGlobal record to be displayed for deletion
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

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
     * Display a listing of the Organization configuration.
     *
     * @return \Illuminate\Http\Response
     */
    public function printAll()
    {
        $mmsGlobal = MmsGlobal::findOrFail(Auth::user()->mms_global_id);
        $telephone = '';
        if (strlen($mmsGlobal->telephone) > 6) {
            $telephone = '(' . substr($mmsGlobal->telephone, 0, 3);
            $telephone .= ') ' . substr($mmsGlobal->telephone, 3, 3);
            $telephone .= ' - ' .substr($mmsGlobal->telephone, 6);
        } elseif (strlen($mmsGlobal->telephone) > 3) {
            $telephone = '(' . substr($mmsGlobal->telephone, 0, 3);
            $telephone .= ') ' . substr($mmsGlobal->telephone, 3);
        } elseif (strlen($mmsGlobal->telephone) > 0) {
            $telephone = '(' . $mmsGlobal->telephone . ')';
        } else {
            $telephone = '';
        }
        return view(
            'maintenance.organization.print',
            compact('mmsGlobal', 'telephone')
        );
    }
}
