<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Head -->
        @include('admin.partials.head')
    </head>
    <body class="dashboard">
    <div id='app'></div>
    <!--NAVIGATION START-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #333;">
        <!-- Nav -->
        @include('admin.partials.nav')
    </nav>

    <!-- The sidebar -->
    <aside class="sidebar">
        <!-- Nav -->
        @include('admin.partials.sidebar')
    </aside>
    <!--NAVIGATION END-->
    
    <!--DASHBOARD CONTENT-->
    <div class="content">
            @yield('content')
    </div>
    
    
        
        

        <!-- <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script> 
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
