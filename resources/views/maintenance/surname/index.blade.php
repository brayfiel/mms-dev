@extends('layouts.maintenance.surname')

@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
        <div class="col-sm-10 text-center">
            <h1>Surname Prefixes</h1>
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

    @if(Session::has('surnameStatus'))
        <div class="row">
            <div class="col-sm-12 alert alert-info text-center">
                {{session('surnameStatus')}}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-1 text-center"><br>Id</div>
        <div class="col-sm-4 text-center"><br>Description</div>
        <div class="col-sm-3 text-center"><br>Last Updated</div>
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"></div>
    </div>
    @if($surnames)
        @foreach($surnames as $surname)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center pt-1">{{$surname->id}}</div>
                <div class="col-sm-4 pt-1">{{$surname->description}}</div>
                <div class="col-sm-3 text-center pt-1">
                    {{$surname->updated_at->diffForHumans()}}
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('surname.edit', $surname->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-edit"></span> Edit
                    </a>
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('surname.show', $surname->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-times text-danger"></span> Delete
                    </a>
                </div>
            </div>
        @endforeach
    @endif

    <div class="row mt-4">
        <div class="col-sm-auto m-sm-auto">
            {{ $surnames->links() }}
            {{-- {{ $surnames->render() }} --}}
        </div>
    </div>

@endsection
