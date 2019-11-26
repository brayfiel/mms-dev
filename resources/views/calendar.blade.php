@extends('layouts.calendar')

@section('content')
<div class="offset-sm-2 col-sm-8">
    <div class="card text-center">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
                </div>
                <div class="col-sm-8">
                    Dashboard
                </div>
                <div class="col-sm-2">
                    <img src="{{ asset('images/jewish_star.jpg') }}" alt="Jewish Star" height="42">
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            You are logged in!
        </div>
    </div>
</div>
@endsection
