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
                Phone Types
            </h2>
        </div>
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="84">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1 text-center font-weight-bold"><br>Id</div>
        <div class="col-sm-3 text-center font-weight-bold"><br>Description</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created On</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated On</div>
    </div>
    @if($phoneTypes)
        @foreach($phoneTypes as $phoneType)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center">{{$phoneType->id}}</div>
                <div class="col-sm-3 text-center">{{$phoneType->description}}</div>
                <div class="col-sm-2 text-center">
                    {{$phoneType->createdBy->fullName()}}
                    <br>
                    {{$phoneType->createdBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$phoneType->created_at->format('m-d-Y')}}
                    <br>
                    {{$phoneType->created_at->format('h:i:s a')}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$phoneType->lastEdittedBy->fullname()}}
                    <br>
                    {{$phoneType->lastEdittedBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$phoneType->updated_at->format('m-d-Y')}}
                    <br>
                    {{$phoneType->updated_at->format('h:i:s a')}}

                </div>
            </div>
        @endforeach
    @endif
@endsection
