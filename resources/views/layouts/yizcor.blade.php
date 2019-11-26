<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/metismenu/dist/metisMenu.min.css" />
    {{-- <link rel="stylesheet" href="assets/css/x.css" /> --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div id="app">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav bar at the top of the page -->
                    @include('includes.navbar_top')
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <!-- Nav bar at the left of the page -->
                    @include('includes.navbar_left_yizcor')
                </div>
                <div class="col-md-9">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/metismenu"></script>
    {{-- <script src="assets/js/x.js"></script> --}}
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
