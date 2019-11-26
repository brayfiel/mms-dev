@extends('layouts.maintenance.mailing_class')

@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
        <div class="col-sm-10 text-center">
            <h1>Mailing Classes</h1>
        </div>
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
    </div>

    @if($searchText || $sortText)
        <div class="row">
            <div class="col-sm-12 text-center">
                {{ $sortText }}
                <br>
                {{ $searchText }}
            </div>
        </div>
    @endif

    @if(Session::has('mailingClassStatus'))
        <div class="row">
            <div class="col-sm-12 alert alert-info text-center">
                {{session('mailingClassStatus')}}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-1 text-center"><br>Id</div>
        <div class="col-sm-1 text-center">Class<br>Code</div>
        <div class="col-sm-3 text-center"><br>Description</div>
        <div class="col-sm-3 text-center"><br>Last Updated</div>
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"></div>
    </div>
    @if($mailingClasses)
        @foreach($mailingClasses as $mailingClass)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center pt-1">{{$mailingClass->id}}</div>
                <div class="col-sm-1 text-center pt-1">{{$mailingClass->mailing_class_code}}</div>
                <div class="col-sm-3 pt-1">{{$mailingClass->description}}</div>
                <div class="col-sm-3 text-center pt-1">
                    {{$mailingClass->updated_at->diffForHumans()}}
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('mailingclass.edit', $mailingClass->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-edit"></span> Edit
                    </a>
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('mailingclass.show', $mailingClass->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-times text-danger"></span> Delete
                    </a>
                </div>
            </div>
        @endforeach
    @endif

    <div class="row mt-4">
        <div class="offset-sm-4 col-sm-4">
            {{ $mailingClasses->links() }}
            {{-- {{ $mailingClasses->render() }} --}}
        </div>
    </div>

@endsection
