@extends("layouts.maintenance.organization")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Create Organization Configuration</h1>
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

<form method="POST" action="{{route("organization.store")}}">
    @csrf
    <div class="row mt-5 form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="app_name">Application Name:</label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="app_name" id="app_name" maxlength="60" autofocus>
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="app_name_abbrev">Application Name (Abbreviation):</label>
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="app_name_abbrev" id="app_name_abbrev" maxlength="12">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="org_name">Organization Name:</label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="org_name" id="org_name" maxlength="60">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="org_name_abbrev">Organization Name (Abbreviation):</label>
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="org_name_abbrev" id="org_name_abbrev" maxlength="12">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-2 pt-sm-1">
            <label for="address_1">Address</label>
        </div>
        <div class="col-sm-2 pt-sm-1">
            <label for="address_1">Line 1:</label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="address_1" id="address_1" maxlength="60">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-3 col-sm-2 pt-sm-1">
            <label for="address_1">Line 2:</label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="address_2" id="address_2" maxlength="60">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-3 col-sm-2 pt-sm-1">
            <label for="city">City:</label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="city" id="city" maxlength="60">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-3 col-sm-2 pt-sm-1">
            <label for="state">State:</label>
        </div>
        <div class="col-sm-4">
            {{-- <input type="text" class="form-control" name="state" id="state"> --}}
            <select name="state_id" id="state_id" class="form-control" size="1">
                @foreach ($states as $state)
                    <option
                        value="{{$state->id}}">
                        {{$state->state_full}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-3 col-sm-2 pt-sm-1">
            <label for="zip_code">Zip Code:</label>
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="zip_code" id="zip_code" maxlength="5">
        </div>
        <div class="col-sm-1 pt-sm-1 text-center text-dark">
            Ext:
        </div>
        <div class="col-sm-2 text-center">
            <input type="text" class="form-control" name="zip_code_ext" id="zip_code_ext" maxlength="4">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="telephone">Telephone # (Do not use "()-"):</label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="telephone" id="telephone" maxlength="10">
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="email">Email Address:</label>
        </div>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" id="email">
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Create Application/Organization">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
