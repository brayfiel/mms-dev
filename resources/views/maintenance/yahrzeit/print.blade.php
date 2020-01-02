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
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Last printed start date:
            </div>
            <div class="col-sm-3">
                {{$startDateOut}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Last printed end date:
            </div>
            <div class="col-sm-3">
                {{$endDateOut}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Contact for services:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->yahrzeit_service_contact}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Telephone #:
            </div>
            <div class="col-sm-3">
                {{$telephone}}
                {{-- {{$mmsGlobal->yahrzeit_service_contact_telephone}} --}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Email Address:
            </div>
            <div class="col-sm-6">
                {{$mmsGlobal->yahrzeit_service_contact_email}}
            </div>
        </div>
        <div class="row form-group">
            <div class="offset-sm-1 col-sm-4 pt-sm-1">
                Lead time for Yahrzeit mailings:
            </div>
            <div class="col-sm-2">
                {{$mmsGlobal->yahrzeit_lead_time}}
            </div>
        </div>
    @endif
@endsection
