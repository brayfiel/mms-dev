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
                ZIP Codes
            </h2>
        </div>
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="84">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1 text-center font-weight-bold"><br>Id</div>
        <div class="col-sm-1 text-center font-weight-bold"><br>Zip Code</div>
        <div class="col-sm-1 text-center font-weight-bold"><br>City</div>
        <div class="col-sm-1 text-center font-weight-bold"><br>State</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created On</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated On</div>
    </div>
    @if($zipCodes)
        @foreach($zipCodes as $zipCode)
            <div class="row detail-borders">
                <div class="col-sm-1 text-center">{{$zipCode->id}}</div>
                <div class="col-sm-1 text-center">{{$zipCode->zip_code}}</div>
                <div class="col-sm-1 text-center">{{$zipCode->city}}</div>
                <div class="col-sm-1 text-center">{{$zipCode->state}}</div>
                <div class="col-sm-2 text-center">
                    {{$zipCode->createdBy->fullName()}}
                    <br>
                    {{$zipCode->createdBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$zipCode->created_at->format('m-d-Y')}}
                    <br>
                    {{$zipCode->created_at->format('h:i:s a')}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$zipCode->lastEdittedBy->fullname()}}
                    <br>
                    {{$zipCode->lastEdittedBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$zipCode->updated_at->format('m-d-Y')}}
                    <br>
                    {{$zipCode->updated_at->format('h:i:s a')}}
                </div>
            </div>
        @endforeach
    @endif
@endsection
