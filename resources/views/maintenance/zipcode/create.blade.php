@extends("layouts.maintenance.zipcode")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Create ZIP Codes</h1>
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

<form method="POST" action="{{route('zipcode.store')}}">
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
            <input type="text" class="form-control" name="city" id="city" size="255" maxlength="255">
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
                    <option value="{{$state->state_abbrev}}">{{$state->state_full}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Create ZIP Code">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
