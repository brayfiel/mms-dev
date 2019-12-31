<?php
/**
 * Application controller to update the Yahrzeit data in the MmsGlobal table
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
 * Controller class to update the Yahrzeit data in the MmsGlobal table
 * PHP version 7.3+
 *
 * @category Update_Data
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class YahrzeitController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request incoming updates from the blade
     * @param int                      $id      id of record to update

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        return view(
            'maintenance.yahrzeit.print',
            compact('mmsGlobal')
        );
    }
}
