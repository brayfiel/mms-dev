@extends("layouts.maintenance.membership_status")

@section("content")
<div class="row">
    <div class="col-sm-1 text-center">
        <img src="{{asset("images/jewish_star.jpg")}}" alt="Jewish Star" height="42">
    </div>
    <div class="col-sm-10 text-center">
        <h1>Delete Membership Statuses</h1>
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

<form method="POST" action="{{ url("maintenance/membershipstatus/" . $membershipStatus->id) }}">
    @method('DELETE')
    @csrf
    <div class="row mt-5">
        <div class="offset-sm-1 col-sm-4">
            Membership Id:
        </div>
        <div class="col-sm-6">
            {{$membershipStatus->id}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Description:
        </div>
        <div class="col-sm-6">
            {{$membershipStatus->description}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Created By:
        </div>
        <div class="col-sm-6">
            {{$createdBy}}
            <br>
            {{$membershipStatus->createdBy->email}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Created On:
        </div>
        <div class="col-sm-6">
            {{$membershipStatus->created_at->format('m-d-Y')}}
            at
            {{$membershipStatus->created_at->format('h:i:s a')}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Last Edited By:
        </div>
        <div class="col-sm-6">
            {{$lastEditBy}}
            <br>
            {{$membershipStatus->lastEdittedBy->email}}
        </div>
    </div>
    <div class="row pt-2">
        <div class="offset-sm-1 col-sm-4">
            Last Edited On:
        </div>
        <div class="col-sm-6">
            {{$membershipStatus->updated_at->format('m-d-Y')}}
            at
            {{$membershipStatus->updated_at->format('h:i:s a')}}
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
