@extends('layouts.maintenance.membership_status')

@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
        <div class="col-sm-10 text-center">
            <h1>Membership Statuses</h1>
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

    @if(Session::has('membershipStatusStatus'))
        <div class="row">
            <div class="col-sm-12 alert alert-info text-center">
                {{session('membershipStatusStatus')}}
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
    @if($membershipStatuses)
        @foreach($membershipStatuses as $membershipStatus)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center pt-1">{{$membershipStatus->id}}</div>
                <div class="col-sm-4 pt-1">{{$membershipStatus->description}}</div>
                <div class="col-sm-3 text-center pt-1">
                    {{$membershipStatus->updated_at->diffForHumans()}}
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('membershipstatus.edit', $membershipStatus->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-edit"></span> Edit
                    </a>
                </div>
                <div class="col-sm-2 text-center">
                    <a href="{{route('membershipstatus.show', $membershipStatus->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-times text-danger"></span> Delete
                    </a>
                </div>
            </div>
        @endforeach
    @endif

    <div class="row mt-4">
        <div class="col-sm-auto m-sm-auto">
            {{ $membershipStatuses->links() }}
            {{-- {{ $membershipStatuses->render() }} --}}
        </div>
    </div>

@endsection
