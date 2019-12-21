@extends("layouts.maintenance.state")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Edit State</h1>
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

<form method="POST" action="{{url("maintenance/state/" . $state->id)}}">
    @method('PATCH')
    @csrf
    <div class="row mt-5">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="state_abbrev">State's Abbreviation:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input type="text" class="form-control" name="state_abbrev" value="{{$state->state_abbrev}}" maxlength="2" autofocus>
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="state_full">State's Full Name:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input type="text" class="form-control" name="state_full" value="{{$state->state_full}}">
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="state_territory">Is This A State Or Territory:</label>
        </div>
        <div class="col-sm-6 form-group">
            <select name="state_territory" id="state_territory" class="form-control" size="1">
                <option value="S" {{$state->state_territory === 'S' ? 'selected' : ''}}>State</option>
                <option value="T" {{$state->state_territory === 'T' ? 'selected' : ''}}>Territory</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_by_id">Created By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$createdBy}}
            <br>
            {{$state->createdBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_at">Created On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$state->created_at->format('m-d-Y')}}
            at
            {{$state->created_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="last_editted_by_id">Last Edited By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$lastEditBy}}
            <br>
            {{$state->lastEdittedBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="updated_at">Last Edited On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$state->updated_at->format('m-d-Y')}}
            at
            {{$state->updated_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Update State">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
