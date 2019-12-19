{{-- nav --}}
<nav id="layout-nav" class=" navbar-dark navbar-expand-lg">
    <div class="topnav">
        <ul class="navbar-nav">
            <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == 'cal') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/cal') }}">Calendar</a>
            </li>
            <li class="nav-item {{ (Route::getFacadeRoot()->current()->uri() == '/system') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/system') }}">Dashboard</a>
            </li>
            @auth
                @can('accessAdminpanel')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/system') }}">Admin</a>
                </li>
                @endcan
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
            @endauth
        </ul>
    </div>
</nav>