{{-- Sidebar --}}
<a class="navbar-brand" href="{{ route('home') }}">
    <img class="ml-3" src="{{ asset('../assets/img/circle-logo.png') }}" width="40" height="40" alt="Booky circle logo"> Booky
</a>
<div class="user-panel">
    <div class=" pull-left image">
        @if(Auth::user()->image != '')
        <img src="{!! route('getuserimage', ['user_id' => Auth::user()->id, 'filename' => Auth::user()->image]) !!}"  class="rounded-circle z-depth-2" alt="User Image">
        @endif
    </div>
    <div>
        <p>{{ Auth::user()->name }}</p>
        <p><i class="fa fa-circle text-success"></i> Online</p>
    </div>
</div>
<div class="list-group list-group-flush">
    <a class="{{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }} list-group-item list-group-item-action bg-dark" href="{{ route('home') }}">
        <i class="fa fa-home"></i> <span>Booky</span>
    </a>

    <a class="{{ (Route::getFacadeRoot()->current()->uri() == 'system') ? 'active' : '' }} list-group-item list-group-item-action bg-dark" href="{{ url('system') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>

    <a class="{{ (Route::getFacadeRoot()->current()->uri() == 'admincalendar') ? 'active' : '' }} list-group-item list-group-item-action bg-dark" href="{{ url('admincalendar') }}">
        <i class="fa fa-calendar"></i> <span>Bookings</span>
    </a>

    <a class="{{ (Route::getFacadeRoot()->current()->uri() == 'choices') ? 'active' : '' }} list-group-item list-group-item-action bg-dark" href="{{ url('choices') }}">
        <i class="fa fa-pencil"></i> <span>Booking layout</span>
    </a>

    <a class=" {{ (Route::getFacadeRoot()->current()->uri() == 'users') ? 'active' : '' }} list-group-item list-group-item-action bg-dark" href="{{ url('users') }}">
        <i class="fa fa-user"></i> <span>Users</span>
    </a>

    <a class="nav-link" href="{{ route('logout') }} list-group-item list-group-item-action bg-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> <span>Log ud</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
</div>

