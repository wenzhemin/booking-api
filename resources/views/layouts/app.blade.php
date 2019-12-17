<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Head -->
        @include('partials.head')
    </head>
    <body>

        <!-- Nav -->
		<nav id="layout-nav">
            @include('partials.nav')
        </nav>
       
        <!--<div class="container">-->
                @yield('content')
        <!--</div>-->

        <!-- Footer -->
		<footer id="footer">
            @include('partials.footer')
        </footer>

        {{-- Script for "book" page --}}
        <script>
            $(".bookDate").click(function(){
                $("#myModal").modal("show");

                var dateslot=$(this).attr('data-dateslot');
                $("#dateslot").html(dateslot);
            })
        </script>

        <script>
            $(".bookTime").click(function(){
                var timeslot=$(this).attr('data-timeslot');
                $("#timeslot").val(timeslot);

            })
        </script>

    </body>
</html>
