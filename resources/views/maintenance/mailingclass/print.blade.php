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
                Mailing Classes
            </h2>
        </div>
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="84">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1 text-center font-weight-bold"><br>Id</div>
        <div class="col-sm-1 text-center font-weight-bold">Class<br>Code</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Description</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Created On</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated By</div>
        <div class="col-sm-2 text-center font-weight-bold"><br>Updated On</div>
    </div>
    @if($mailingClasses)
        @foreach($mailingClasses as $mailingClass)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center">{{$mailingClass->id}}</div>
                <div class="col-sm-1 text-center">{{$mailingClass->mailing_class_code}}</div>
                <div class="col-sm-2 text-center">{{$mailingClass->description}}</div>
                <div class="col-sm-2 text-center">
                    {{$mailingClass->createdBy->fullName()}}
                    <br>
                    {{$mailingClass->createdBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{-- {{$mailingClass->created_at}} --}}
                    {{$mailingClass->created_at->format('m-d-Y')}}
                    <br>
                    {{$mailingClass->created_at->format('h:i:s a')}}
                </div>
                <div class="col-sm-2 text-center">
                    {{$mailingClass->lastEdittedBy->fullname()}}
                    <br>
                    {{$mailingClass->lastEdittedBy->email}}
                </div>
                <div class="col-sm-2 text-center">
                    {{-- {{$mailingClass->updated_at}} --}}
                    {{$mailingClass->updated_at->format('m-d-Y')}}
                    <br>
                    {{$mailingClass->updated_at->format('h:i:s a')}}

                </div>
            </div>
        @endforeach
    @endif
@endsection
