@extends("layouts.maintenance.mailing_class")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Create Mailing Classes</h1>
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

<form method="POST" action="{{route("mailingclass.store")}}">
    @csrf
    <div class="row mt-5">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="mailing_class_code">Mailing Class Code:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input type="text" class="form-control" name="mailing_class_code" maxlength="2" autofocus>
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <label for="description">Description:</label>
        </div>
        <div class="col-sm-6 form-group">
            <input type="text" class="form-control" name="description">
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Create Mailing Class">
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>
</form>
@endsection
