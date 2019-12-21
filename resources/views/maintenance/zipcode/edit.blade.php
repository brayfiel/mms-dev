@extends("layouts.maintenance.zipcode")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Edit ZIP Codes</h1>
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

<form method="POST" action="{{url("maintenance/zipcode/" . $zipCode->id)}}">
    @method('PATCH')
    @csrf
    <div class="row mt-5">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="zip_code">Zip Code:</label>
        </div>
        <div class="col-sm-2 form-group">
            <input
                type="text"
                class="form-control"
                name="zip_code"
                id="zip_code"
                size="5"
                maxlength="5"
                value="{{$zipCode->zip_code}}"
                autofocus
                onkeyup=validateZip(this);
            >
        </div>
    </div>
    <div class="row mt-1">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="city">City:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input
                type="text"
                class="form-control"
                name="city" id="city"
                size="255"
                maxlength="255"
                value="{{$zipCode->city}}"
            >
        </div>
    </div>
    <div class="row mt-1">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="state">State / U.S. Territory:</label>
        </div>
        <div class="col-sm-6 form-group">
            {{-- <input type="text" class="form-control" name="state" id="state" size="255" maxlength="255"> --}}
            <select name="state" id="state" class="form-control" size="1">
                @foreach ($states as $state)
                    <option
                        value="{{$state->state_abbrev}}"
                        {{$state->state_abbrev === $zipCode->state ? " selected " : ""}}
                    >
                        {{$state->state_full}}
                    </option>
                @endforeach
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
            {{$zipCode->createdBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="created_at">Created On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$zipCode->created_at->format('m-d-Y')}}
            at
            {{$zipCode->created_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="last_editted_by_id">Last Edited By:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$lastEditBy}}
            <br>
            {{$zipCode->lastEdittedBy->email}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="updated_at">Last Edited On:</label>
        </div>
        <div class="col-sm-6 form-group pl-4">
            {{$zipCode->updated_at->format('m-d-Y')}}
            at
            {{$zipCode->updated_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Update ZIP Code">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
