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
                States
            </h2>
        </div>
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="84">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1 text-center font-weight-bold"><br>Id</div>
        <div class="col-sm-1 text-center font-weight-bold">State<br>Abbreviation</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Full Name</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created On</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated On</div>
    </div>
    @if($states)
        @foreach($states as $state)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center">{{$state->id}}</div>
                <div class="col-sm-1 text-center">{{$state->state_abbrev}}</div>
                <div class="col-sm-2 text-center">{{$state->state_full}}</div>
                <div class="col-sm-2 text-center">
                    {{$state->createdBy->fullName()}}
                    <br>
                    {{$state->createdBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{-- {{$state->created_at}} --}}
                    {{$state->created_at->format('m-d-Y')}}
                    <br>
                    {{$state->created_at->format('h:i:s a')}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$state->lastEdittedBy->fullname()}}
                    <br>
                    {{$state->lastEdittedBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{-- {{$mailingClass->updated_at}} --}}
                    {{$state->updated_at->format('m-d-Y')}}
                    <br>
                    {{$state->updated_at->format('h:i:s a')}}
                </div>
            </div>
        @endforeach
    @endif
@endsection
