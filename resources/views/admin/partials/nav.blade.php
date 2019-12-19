{{-- nav --}}
<a class="navbar-brand" href="#">Booky</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item ">
            <a class="nav-link" href="#">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Calendar</a>
        </li>
        @if(Auth::check())
        <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li> 
    </ul>
</div>