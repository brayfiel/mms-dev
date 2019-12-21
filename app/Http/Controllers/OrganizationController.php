<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
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

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
}
