<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-primary" href="{{ url('/home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ url('/membership') }}">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ url('/yizcor') }}">Yizcor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ url('/permanentpews') }}">Permanent Pews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ url('highholidaytickets') }}">High Holday Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ url('calendar') }}">Calendar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Maintenance <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/mailingclass') }}">
                                Mailing Class
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/membershiptype') }}">
                                Member Type
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/phonetype') }}">
                                Phone Type
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/membershipstatus') }}">
                                Membership Status
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/surname') }}">
                                Surname Prefix
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/suffix') }}">
                                Surname Suffix
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/vipcode') }}">
                                VIP Code
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/state') }}">
                                States
                            </a>
                            {{-- <a class="dropdown-item text-primary" href="{{ url('/maintenance/zipcode') }}"> --}}
                                {{-- Zip Code --}}
                            {{-- </a> --}}
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/organization') }}">
                                Organization Configuration
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('/maintenance/yahrzeit') }}">
                                Yahrzeit Configuration
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('mailingClassIndex') }}">
                                Miscellaneous Configuration
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('mailingClassIndex') }}">
                                Import
                            </a>
                            <a class="dropdown-item text-primary" href="{{ url('mailingClassIndex') }}">
                                Logs
                            </a>
                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name . " " . Auth::user()->last_name}} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
