@extends('dashboard.app')

<!--SIDEBAR NAVIGATION START-->
<div class="wrapper d-flex">
        <div class="sideMenu">
            <div class="sidebar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon">dashboard</i><span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon">person</i><span class="text">User Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon">insert_chart</i><span class="text">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon">settings</i><span class="text">Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon">computer</i><span class="text">Demo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link sideMenuToggler">
                            <i class="material-icons icon">view_list</i><span class="text">Resize</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 my-3">
                Nullam sodales sapien felis, sit amet rhoncus mi bibendum ac. Aliquam erat volutpat. Nullam elementum cursus quam, ac posuere ex blandit id. Cras ac bibendum erat, ut ultrices nisl.
                </div>
            </div>
        </div>
    </main>    
@endsection