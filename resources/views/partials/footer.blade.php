{{-- FOOTER --}}
<footer id="footer">
    <div class="container-fluid">
        <div class="container-fluid footernav">
            <div class="row">        
                <div class="col-md-12">                
                    <footer class="page-footer center-on-small-only pt-0">
                        <div class="container">
                            <div class="row footmenu pt-3 mb-2 text-center d-flex justify-content-center">
                                <div class="col-md-2 mb-3">
                                    <h4 class="font-bold"><a href="#!">About</a></h4>
                                </div>

                                <div class="col-md-2 mb-3">
                                    <h4 class="font-bold"><a href="#!">FAQ</a></h4>
                                </div>

                                <div class="col-md-2 mb-3 {{ (Route::getFacadeRoot()->current()->uri() == '/login') ? 'active' : '' }}">
                                    <h4 class="font-bold"><a href="{{ url('/login') }}">Log In</a></h4>
                                </div>

                                <div class="col-md-2 mb-3 {{ (Route::getFacadeRoot()->current()->uri() == '/register') ? 'active' : '' }}">
                                    <h4 class="font-bold"><a href="{{ url('/register') }}">Register</a></h4>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer-socials mb-2 text-center">
                                        <!--Facebook-->
                                        <a class="icons-sm fb-ic"><i class="fab fa-facebook-f fa-lg white-text mr-md-4"> </i></a>
                                        <!--Twitter-->
                                        <a class="icons-sm tw-ic"><i class="fab fa-twitter fa-lg white-text mx-md-4"> </i></a>
                                        <!--Google +-->
                                        <a class="icons-sm gplus-ic"><i class="fab fa-google-plus-g fa-lg white-text mx-md-4"> </i></a>
                                        <!--Linkedin-->
                                        <a class="icons-sm li-ic"><i class="fab fa-linkedin-in fa-lg white-text mx-md-4"> </i></a>
                                        <!--Instagram-->
                                        <a class="icons-sm ins-ic"><i class="fab fa-instagram fa-lg white-text mx-md-4"> </i></a>
                                        <!--Pinterest-->
                                        <a class="icons-sm pin-ic"><i class="fab fa-pinterest fa-lg white-text ml-md-4"> </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-copyright">
                            <div class="container-fluid text-center">
                                © 2020 Copyright: <a href="https://www.MDBootstrap.com"> Booky.dk </a>
                            </div>
                        </div>
                    </footer>              
                </div>            
            </div>
        </div>
    </div>
</footer>