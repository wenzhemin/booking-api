<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Head -->
        @include('admin.partials.head')
    </head>
    <body class="dashboard">
        <div class="wrapper">
            <!-- SIDEBAR -->
            <div class="bg-dark" id="sidebar">
                @include('admin.partials.sidebar')
            </div>

            <div id="page-content">
                <!-- NAV-->
                <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-dark bg-dark">
                    @include('admin.partials.nav')
                </nav>

                
                <!--DASHBOARD CONTENT-->
                <div class="content">
                        @yield('content')
                </div>
            </div>
        </div>


        <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #page-content').toggleClass('sidebar-collapse');
            });
        });
        </script>

        <script src="js/jquery.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
