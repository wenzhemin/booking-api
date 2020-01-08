{{-- Sidebar --}}
<!-- Sidebar user panel -->
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
<ul class="sidebar-menu">
    <li class="sidebar-title">
        Main navigation
    <li>
        <a class="{{ (Route::getFacadeRoot()->current()->uri() == '/') ? 'active' : '' }}" href="{{ route('home') }}">
            <i class="fa fa-home"></i> <span>Booky</span>
        </a>
    </li>
    <li>
        <a class="{{ (Route::getFacadeRoot()->current()->uri() == 'system') ? 'active' : '' }}" href="{{ url('system') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a class="{{ (Route::getFacadeRoot()->current()->uri() == '/admincalendar') ? 'active' : '' }}" href="{{ url('admincalendar') }}">
            <i class="fa fa-calendar"></i> <span>Bookings</span>
        </a>
    </li>
    <li>
        <a class="{{ (Route::getFacadeRoot()->current()->uri() == '/choices') ? 'active' : '' }}" href="{{ url('choices') }}">
            <i class="fa fa-pencil"></i> <span>Booking layout</span>
        </a>
    </li>
    <li>
        <a class=" {{ (Route::getFacadeRoot()->current()->uri() == '/users') ? 'active' : '' }}" href="{{ url('users') }}">
            <i class="fa fa-user"></i> <span>Users</span>
        </a>
    </li>
    <li>
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i> <span>Log ud</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </li>
</ul>