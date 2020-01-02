@extends("layouts.maintenance.misc")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Edit Miscellaneous Configuration</h1>
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

<form method="POST" action="{{url("maintenance/misc/" . $misc->id)}}">
    @method('PATCH')
    @csrf

    <div class="row mt-5 form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Application Name:
        </div>
        <div class="col-sm-6 ml-sm-3">
            {{$misc->app_name}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Application Name (Abbreviation):
        </div>
        <div class="col-sm-2 ml-sm-3">
            {{$misc->app_name_abbrev}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Organization Name:
        </div>
        <div class="col-sm-6 ml-sm-3">
            {{$misc->org_name}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Organization Name (Abbreviation):
        </div>
        <div class="col-sm-2 ml-sm-3">
            {{$misc->org_name_abbrev}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="permanent_pew_year">Year for Permanent Pew and High Holiday ticket processing:</label>
        </div>
        <div class="col-sm-2">
            <input
                type="number"
                class="form-control"
                name="permanent_pew_year"
                id="permanent_pew_year"
                value="{{$misc->permanent_pew_year < 1 ? "2000" : $misc->permanent_pew_year}}"
                min="2000"
                max="2100"
            >
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input
                type="submit"
                name="submit"
                class="btn btn-primary btn-block"
                value="Update Miscellaneous Configuration data"
            >
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>

</form>
@endsection
