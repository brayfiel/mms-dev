@extends("layouts.maintenance.membership_type")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Edit Membership Type</h1>
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

<form method="POST" action="{{url("maintenance/membershiptype/" . $membershipType->id)}}">
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="description">Description:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input type="text" class="form-control" name="description" value="{{$membershipType->description}}">
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_by_id">Created By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$createdBy}}
            <br>
            {{$membershipType->createdBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_at">Created On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$membershipType->created_at->format('m-d-Y')}}
            at
            {{$membershipType->created_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="last_editted_by_id">Last Edited By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$lastEditBy}}
            <br>
            {{$membershipType->lastEdittedBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="updated_at">Last Edited On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$membershipType->updated_at->format('m-d-Y')}}
            at
            {{$membershipType->updated_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Update Membership Type">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
