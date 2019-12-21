@extends('layouts.maintenance.state')

@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
        <div class="col-sm-10 text-center">
            <h1>States</h1>
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

    @if(Session::has('stateStatus'))
        <div class="row">
            <div class="col-sm-12 alert alert-info text-center">
                {{session('stateStatus')}}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-1 text-center"><br>Id</div>
        <div class="col-sm-1 text-center">State<br>Abbrev.</div>
        <div class="col-sm-3 text-center"><br>Full Name</div>
        <div class="col-sm-3 text-center"><br>Last Updated</div>
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"></div>
    </div>
    @if($states)
        @foreach($states as $state)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center pt-1">{{$state->id}}</div>
                <div class="col-sm-1 text-center pt-1">{{$state->state_abbrev}}</div>
                <div class="col-sm-3 pt-1">{{$state->state_full}}</div>
                <div class="col-sm-3 text-center pt-1">
                    {{$state->updated_at->diffForHumans()}}
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('state.edit', $state->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-edit"></span> Edit
                    </a>
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('state.show', $state->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-times text-danger"></span> Delete
                    </a>
                </div>
            </div>
        @endforeach
    @endif

    <div class="row mt-4">
        <div class="col-sm-auto m-sm-auto">
            {{ $states->links() }}
            {{-- {{ $states->render() }} --}}
        </div>
    </div>

@endsection
