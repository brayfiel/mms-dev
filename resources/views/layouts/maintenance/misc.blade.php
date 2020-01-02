<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/libs.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

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
                    @include('includes.maintenance.navbar_left_misc_config')
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
    <script src="{{asset('js/libs.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
