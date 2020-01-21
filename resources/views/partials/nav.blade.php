{{-- nav --}}
<!-- <nav id="layout-nav" class=" navbar-dark navbar-expand-lg">
    <div class="topnav">
        <ul class="navbar-nav">
            <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">
                    <img src="{{ asset('../assets/img/circle-logo.png') }}" width="30" height="30" alt="Booky circle logo"> Home
                </a>
            </li>
            <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == 'cal') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/cal') }}">Calendar</a>
            </li>
            @if(Auth::check())
                <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/system') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/system') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/login') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/register') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav> -->

<div class="container-fluid">
        
        <nav class="navbar navbar-expand-md justify-content-center navigation">
            <a class="navbar-brand mr-0" href="#">
                <img src="{{ asset('../assets/img/LogoBooking-03.png') }}" width="130" alt="Booky circle logo">
            </a>
            <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
                <i class="fas fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == 'cal') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/cal') }}">Calendar</a>
                    </li>
                @if(Auth::check())
                    <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/system') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/system') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                @else
                <ul class="nav navbar-nav text-center">
                    <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                @endif
                </ul>
            </div>
        </nav>

    </div>