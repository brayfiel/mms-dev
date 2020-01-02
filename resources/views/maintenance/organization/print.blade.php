@extends('layouts.basic')
@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="84">
        </div>
        <div class="col-sm-10 text-center font-weight-bold">
            <h2>
                {{$mmsGlobal->org_name}} {{$mmsGlobal->app_name}}
                <br>
                Organization Configuration
            </h2>
        </div>
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="84">
        </div>
    </div>

    @if($mmsGlobal)
        <div class="row mt-5 form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Application Name:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->app_name}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Application Name (Abbreviation):
            </div>
            <div class="col-sm-2">
                {{$mmsGlobal->app_name_abbrev}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Organization Name:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->org_name}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Organization Name (Abbreviation):
            </div>
            <div class="col-sm-2">
                {{$mmsGlobal->org_name_abbrev}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-2 pt-sm-1">
                Address
            </div>
            <div class="col-sm-2 pt-sm-1">
                Line 1:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->address_1}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-3 col-sm-2 pt-sm-1">
                Line 2:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->address_2}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-3 col-sm-2 pt-sm-1">
                City:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->city}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-3 col-sm-2 pt-sm-1">
                State:
            </div>
            <div class="col-sm-4">
                {{-- {{$mmsGlobal->state_id}} --}}
                {{$mmsGlobal->state->state_full}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-3 col-sm-2 pt-sm-1">
                Zip Code:
            </div>
            <div class="col-sm-2">
                {{$mmsGlobal->zip_code . ' - ' . $mmsGlobal->zip_code_ext}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Telephone #:
            </div>
            <div class="col-sm-6">
                {{$telephone}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Email Address:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->email}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Created By:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->createdBy->fullname()}} ({{$mmsGlobal->createdBy->email}})
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Created On:
            </div>
            <div class="col-sm-3">
                {{$mmsGlobal->created_at->format('m-d-Y')}}
                at
                {{$mmsGlobal->created_at->format('h:i:s a')}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Updated By:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->lastEdittedBy->fullname()}} ({{$mmsGlobal->lastEdittedBy->email}})
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Updated On:
            </div>
            <div class="col-sm-3">
                {{$mmsGlobal->updated_at->format('m-d-Y')}}
                at
                {{$mmsGlobal->updated_at->format('h:i:s a')}}
            </div>
        </div>
    @endif
@endsection
