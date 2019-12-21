@extends("layouts.maintenance.state")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Delete State</h1>
    </div>
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
</div>

@if ($errors->any())
<div class="row">
    <div class="col-sm-12 alert alert-danger">
        <div class="text-center">
            <h3>>>> Error <<<</h3>
        </div>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<form method="POST" action="{{ url("maintenance/state/" . $state->id) }}">
    @method('DELETE')
    @csrf
    <div class="row mt-5">
        <div class="offset-sm-1 col-sm-4">
            State Abbreviation:
        </div>
        <div class="col-sm-6">
            {{$state->state_abbrev}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Description:
        </div>
        <div class="col-sm-6">
            {{$state->state_full}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4 form-group">
            State Or Territory:
        </div>
        <div class="col-sm-6 form-group">
            {{$state->state_territory === 'S' ? 'State' : 'Territory'}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Created By:
        </div>
        <div class="col-sm-6">
            {{$createdBy}}
            <br>
            {{$state->createdBy->email}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Created On:
        </div>
        <div class="col-sm-6">
            {{$state->created_at->format('m-d-Y')}}
            at
            {{$state->created_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Last Edited By:
        </div>
        <div class="col-sm-6">
            {{$lastEditBy}}
            <br>
            {{$state->lastEdittedBy->email}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Last Edited On:
        </div>
        <div class="col-sm-6">
            {{$state->updated_at->format('m-d-Y')}}
            at
            {{$state->updated_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row pt-4">
        <div class="offset-sm-1 col-sm-4">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Confirm Deletion">
        </div>
        <div class="offset-sm-2 col-sm-4">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
