@extends('layouts.maintenance.organization')

@section('content')
    <div class="row">
        <div class="col-sm-1 text-center">
            <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
        </div>
        <div class="col-sm-10 text-center">
            <h1>Organizations</h1>
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

    @if(Session::has('organizationStatus'))
        <div class="row">
            <div class="col-sm-12 alert alert-info text-center">
                {{session('organizationStatus')}}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-1 text-center"><br>Id</div>
        <div class="col-sm-2 text-center"><br>Application Name</div>
        <div class="col-sm-3 text-center"><br>Organization Name</div>
        <div class="col-sm-2 text-center"><br>Last Updated</div>
        <div class="col-sm-2 text-center"></div>
        <div class="col-sm-2 text-center"></div>
    </div>
    @if($mmsGlobals)
        @foreach($mmsGlobals as $mmsGlobal)
            <div class="row pt-1 pb-1 detail-borders">
                <div class="col-sm-1 text-center pt-1">{{$mmsGlobal->id}}</div>
                <div class="col-sm-2 pt-1">{{$mmsGlobal->app_name_abbrev . ' - ' . $mmsGlobal->app_name}}</div>
                <div class="col-sm-3 pt-1">{{$mmsGlobal->org_name_abbrev . ' - ' . $mmsGlobal->org_name}}</div>
                <div class="col-sm-2 text-center pt-1">
                    {{$mmsGlobal->updated_at->diffForHumans()}}
                </div>
                <div class="col-sm-2 m-sm-auto text-center">
                    <a href="{{route('organization.edit', $mmsGlobal->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-edit"></span> Edit
                    </a>
                </div>
                <div class="col-sm-2 m-sm-auto text-center">
                    {{-- <a href="{{route('organization.show', $mmsGlobal->id)}}" class="btn btn-primary">
                        <span class="fa fw fa-times text-danger"></span> Delete
                    </a> --}}
                </div>
            </div>
        @endforeach
    @endif

    <div class="row mt-4">
        <div class="col-sm-auto m-sm-auto">
            {{ $mmsGlobals->links() }}
        </div>
    </div>

@endsection
