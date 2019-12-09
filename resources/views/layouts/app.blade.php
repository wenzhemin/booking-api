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
            $(".book").click(function(){
                var timeslot=$(this).attr('data-timeslot');
                $("#slot").html(timeslot);
                $("#timeslot").val(timeslot);
                $("#myModal").modal("show");
        
        })
        </script>
    </body>
</html>
