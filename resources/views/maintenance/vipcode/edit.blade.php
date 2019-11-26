@extends("layouts.maintenance.vipcode")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Edit VIP Codes</h1>
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

<form method="POST" action="{{url("maintenance/vipcode/" . $vipCode->id)}}">
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="description">Description:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input type="text" class="form-control" name="description" value="{{$vipCode->description}}">
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_by_id">Created By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$createdBy}}
            <br>
            {{$vipCode->createdBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_at">Created On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$vipCode->created_at->format('m-d-Y')}}
            at
            {{$vipCode->created_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="last_editted_by_id">Last Edited By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$lastEditBy}}
            <br>
            {{$vipCode->lastEdittedBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="updated_at">Last Edited On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$vipCode->updated_at->format('m-d-Y')}}
            at
            {{$vipCode->updated_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Update VIP Code">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
