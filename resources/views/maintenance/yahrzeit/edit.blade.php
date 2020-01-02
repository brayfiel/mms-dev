@extends("layouts.maintenance.organization")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Edit Yahrzeit Configuration</h1>
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

<form method="POST" action="{{url("maintenance/yahrzeit/" . $yahrzeit->id)}}">
    @method('PATCH')
    @csrf

    <div class="row mt-5 form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Application Name:
        </div>
        <div class="col-sm-6 ml-sm-3">
            {{$yahrzeit->app_name}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Application Name (Abbreviation):
        </div>
        <div class="col-sm-2 ml-sm-3">
            {{$yahrzeit->app_name_abbrev}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Organization Name:
        </div>
        <div class="col-sm-6 ml-sm-3">
            {{$yahrzeit->org_name}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            Organization Name (Abbreviation):
        </div>
        <div class="col-sm-2 ml-sm-3">
            {{$yahrzeit->org_name_abbrev}}
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="yahrzeit_last_printed_start">Last printed start date:</label>
        </div>
        <div class="col-sm-3">
            <input
                type="date"
                class="form-control"
                name="yahrzeit_last_printed_start"
                id="yahrzeit_last_printed_start"
                value="{{$yahrzeit->yahrzeit_last_printed_start}}"
            >
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="yahrzeit_last_printed_end">Last printed end date:</label>
        </div>
        <div class="col-sm-3">
            <input
                type="date"
                class="form-control"
                name="yahrzeit_last_printed_end"
                id="yahrzeit_last_printed_end"
                value="{{$yahrzeit->yahrzeit_last_printed_end}}"
            >
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="yahrzeit_service_contact">Contact for services:</label>
        </div>
        <div class="col-sm-6">
            <input
                type="text"
                class="form-control"
                name="yahrzeit_service_contact"
                id="yahrzeit_service_contact"
                maxlength="50"
                value="{{$yahrzeit->yahrzeit_service_contact}}"
            >
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="yahrzeit_service_contact_telephone">Telephone # (Do not use "()- "):</label>
        </div>
        <div class="col-sm-3">
            <input
                type="text"
                class="form-control"
                name="yahrzeit_service_contact_telephone"
                id="yahrzeit_service_contact_telephone"
                maxlength="10"
                value="{{$yahrzeit->yahrzeit_service_contact_telephone}}"
                onkeyup=validateZip(this)
            >
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="yahrzeit_service_contact_email">Email Address:</label>
        </div>
        <div class="col-sm-6">
            <input
                type="email"
                class="form-control"
                name="yahrzeit_service_contact_email"
                id="yahrzeit_service_contact_email"
                value="{{$yahrzeit->yahrzeit_service_contact_email}}"
            >
        </div>
    </div>
    <div class="row form-group">
        <div class="offset-sm-1 col-sm-4 pt-sm-1">
            <label for="yahrzeit_lead_time">
                Lead time for Yahrzeit mailings:
                <br>
                (Between 1 and 180 days)
            </label>
        </div>
        <div class="col-sm-2">
            <input
                type="number"
                class="form-control"
                name="yahrzeit_lead_time"
                id="yahrzeit_lead_time"
                value="{{$yahrzeit->yahrzeit_lead_time < 1 ? "1" : $yahrzeit->yahrzeit_lead_time}}"
                min="1"
                max="180"
            >
        </div>
    </div>
    <div class="row">
        <div class="offset-sm-1 col-sm-4 form-group">
            <input
                type="submit"
                name="submit"
                class="btn btn-primary btn-block"
                value="Update Yahrzeit data"
            >
        </div>
        <div class="offset-sm-2 col-sm-4 form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cancel">
        </div>
    </div>

</form>
@endsection
