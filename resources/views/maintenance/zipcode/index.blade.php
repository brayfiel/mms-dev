@extends('layouts.maintenance.zipcode')

@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
        <div class="col-sm-10 text-center">
            <h1>ZIP Codes</h1>
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

    @if(Session::has('zipCodeStatus'))
        <div class="row">
            <div class="col-sm-12 alert alert-info text-center">
                {{session('zipCodeStatus')}}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-1 text-center"><br>Id</div>
        <div class="col-sm-1 text-center">ZIP Code</div>
        <div class="col-sm-2 text-center"><br>City</div>
        <div class="col-sm-1 text-center"><br>State</div>
        <div class="col-sm-3 text-center"><br>Last Updated</div>
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"></div>
    </div>
    @if($zipCodes)
        @foreach($zipCodes as $zipCode)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center pt-1">{{$zipCode->id}}</div>
                <div class="col-sm-1 text-center pt-1">{{$zipCode->zip_code}}</div>
                <div class="col-sm-2 text-center pt-1">{{$zipCode->city}}</div>
                <div class="col-sm-1 text-center pt-1">{{$zipCode->state}}</div>
                <div class="col-sm-3 text-center pt-1">
                    {{$zipCode->updated_at->diffForHumans()}}
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('zipcode.edit', $zipCode->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-edit"></span> Edit
                    </a>
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('zipcode.show', $zipCode->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-times text-danger"></span> Delete
                    </a>
                </div>
            </div>
        @endforeach
    @endif

    <div class="row mt-4">
        <div class="col-sm-auto m-sm-auto">
            {{ $zipCodes->links() }}
        </div>
    </div>

@endsection
