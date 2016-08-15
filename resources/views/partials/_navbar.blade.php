<nav class="navbar navbar-custom navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#">
                <img src="{{ URL::asset('/img/logo.png') }}" alt="Logo" height="60">
            </a>
            {{--<div class="navbar-brand topnav">| &nbsp;Portal Travel Umroh Seluruh Indonesia</div>--}}
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ action('PageController@index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ action('PageController@bookingStatus') }}">My Booking</a>
                </li>
                <li>
                    <a href="{{ action('AgenController@showRegister') }}">Afiliasi & Mitra</a>
                </li>
                <li>
                    <a id="cobalogin" href="{{ is_null(\Illuminate\Support\Facades\Auth::user()) ? action('PageController@login') : url('logout') }}">
                        {{ is_null(\Illuminate\Support\Facades\Auth::user()) ? 'Login' : 'Logout' }}
                    </a>
                </li>
                <li>
                    <a id="cobalogin" href="{{ is_null(\Illuminate\Support\Facades\Auth::user()) ? action('PageController@dashboard') : url('dashboard') }}">
                        {{ is_null(\Illuminate\Support\Facades\Auth::user()) ? '' : 'Dashboard' }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
