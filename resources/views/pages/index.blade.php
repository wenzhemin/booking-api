@extends('layouts.app')

@section('content')
  
{{-- header-- Booking made simple--   --}}
<!-- <section class="row  my-auto h" id="header"> 
  <div class="container">
    <div class=" text-center">
      <div class="row title typewriter">
        <h1 class="pb-5">Booking made simple!</h1>
      </div> 

      <div class="w-25 mx-auto">
        <h5> Customizable features</h5>
        <hr >
        <h5> Easy to integrate</h5>
        <hr>
        <h5> Complete support</h5>
      </div>  
    </div>  
  </div>
  </section> -->

<div class="container-fluid">
  <div class="container-fluid banner">
    <div class="jumbotron jumbotron-fluid jumbotronbanner">
      <div class="container my-auto h"> 
        <div class="title typewriter">     
          <h2 class="display-4 text-center">WE CUSTOMIZE BOOKINGS!</h2>
          <p class="lead w-50 mx-auto text-center">We create bookings experiences for every business. <br> Check out how easy you can begin, getting reservations for your clients</p>  
        </div>
      </div>   
    </div>
  </div>
</div>
<!-- 
{{-- Create your own booking system  --}}
<section class="row" id="create">
  <div class="container w-50">
    <div class=" text-center">
      <div class="title">
        <h1 class="pb-5">Create your own booking system</h1>
      </div>
      {{-- <div class=" mx-auto">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem beatae mollitia animi cumque temporibus ipsum dignissimos velit. Cumque quis, minima officiis aut ab adipisci, velit vitae numquam ipsa commodi laborum.
      </div>  --}}
    </div>
  </div>

  {{-- cards  --}}
  <div class="row cards px-5 m-0"> 
    <div class="col-md-4 d-flex justify-content-center">

        <span class="fa-stack fa-2x fa-lg pr-5 pt-2">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <strong class="fa-stack-1x">
              <i class="fa fa-calendar pt-3"></i>
            </strong>
        </span>
      <div class="card border-0 w-50">
        <div class="card-body">
          <h5 class="card-title mt-0 pt-0">Easy booking</h5> 
          <p class="card-text">
            Your customers are able to book 24/7. Manage bookings using our calendar.</p>
          {{-- <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
       
      <span class="fa-stack fa-2x pr-5 pt-2">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <strong class="fa-stack-1x">
               <i class="fa fa-credit-card pt-3"></i>
            </strong>
        </span>
        
        <div class="card border-0 w-50">
        <div class="card-body">
          <h5 class="card-title mt-0 pt-0">Secure payment</h5> 
          <p class="card-text">Securely integrated payment, Easy collect, track and refund.</p>
          {{-- <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
      
        <span class="fa-stack fa-2x fa-lg pr-5 pt-2">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <strong class="fa-stack-1x">
              <i class="fa fa-cogs pt-3"></i>
            </strong>
        </span>


      <div class="card border-0 w-50">
        <div class="card-body">
          <h5 class="card-title mt-0 pt-0">Customizable features</h5> 
          <p class="card-text">Flexibility to personalize account, preferences, notifications and more.</p>
          {{-- <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>
    </div> 
  </div>
   
</section>-->

<div class="container-fluid">
  <div class="container-fluid stepsection">
    <!-- Team -->
    <div class="container">                
    <div class="title">
        <h1 class="pb-5 teamtext text-center">Four easy steps:</h2>  
          </div>  
      <div class="row">
        <!-- Step 1 -->
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="frontside">
              <div class="stepcard">
                  <div class="card-body text-center">
                  <span style="font-size: 6em;">
                    <i class="fas fa-tag"></i>
                  </span>
                      <h4 class="card-title">Buy</h4>
                      <p class="card-text">To unlock all the exclusive features, you need to buy a monthly subscription.</p>
                  </div>
              </div>
          </div>          
        </div>
        <!-- ./Step 1 -->
        <!-- Step 2 -->
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="frontside">
              <div class="stepcard">
                  <div class="card-body text-center">
                  <span style="font-size: 6em;">
                    <i class="fas fa-tasks"></i>
                  </span>
                      <h4 class="card-title">Business</h4>
                      <p class="card-text">You pick the business you are in and a premade formular will be crafted.</p>
                  </div>
              </div>
          </div>
                    
        </div>
        <!-- ./Step 2 -->
        <!-- Step 3 -->
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="frontside">
              <div class="stepcard">
                  <div class="card-body text-center">
                  <span style="font-size: 6em; color: black">
                    <i class="fas fa-cog"></i>
                  </span>
                      <h4 class="card-title">Customize</h4>
                      <p class="card-text">You have the ability to add more and specific forms, to suit your specific needs.</p>
                  </div>
              </div>
          </div>
        </div>
        <!-- ./Step 3 -->

        <!-- Step 4 -->
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="frontside">
              <div class="stepcard">
                  <div class="card-body text-center">
                  <span style="font-size: 6em;">
                    <i class="fas fa-calendar-plus"></i>
                  </span>
                      <h4 class="card-title">Book</h4>
                      <p class="card-text">You have your booking system, we can offer to implement the system into your existing website.</p>
                  </div>
              </div>
          </div>     
        </div>
        <!-- ./Step 4 -->  
      </div>
    </div>
    <!-- Team -->
  </div>
</div>

{{-- ********** Existing booking systems ********* --}}

<!-- <section class="row h-75" id="existing-booking"> 
        <div class="container">
          <div class=" text-center title">
            <h1 class="pb-5">Existing booking systems</h1>
          </div> 
        </div>
  {{-- cards  --}}
  <div class="row cards px-5 m-0 justify-content-center">

      <div class="col-md-4"> 
          <h5 class="customer-title mt-0 pt-0 w-75 mx-auto">RaftCPH</h5> 
        <div class="card border-0 w-75 mx-auto">
            <div class="card-body">   
                <a href="www.google.com">
                    <img src="assets/raft.jpg" alt="" class="w-100">
                </a>
              </div>
        </div>
      </div> 



      <div class="col-md-4"> 
          <h5 class="customer-title mt-0 pt-0 w-75 mx-auto">Alegria Photography</h5> 
          <div class="card border-0 w-75 mx-auto">
              <div class="card-body">   
                  <a href="www.google.com">
                      <img src="assets/alegria2.png" alt="" class="w-100">
                  </a>
                </div>
          </div>
      </div>  
        
        
      
      <div class="col-md-4"> 
          <h5 class="customer-title mt-0 pt-0 w-75 mx-auto">Pending</h5> 
          <div class="card border-0 w-75 mx-auto">
              <div class="card-body">   
                <a href="www.google.com">
                    <img src="assets/hourglass.jpg" alt="" class="w-100">
                </a>
              </div>
            </div>  
      </div> 

  </div>
</section>
          -->
{{-- ********** Get in touch ********* --}}
<div class="container-fluid">
  <div class="container-fluid stepsection"> 
     
        <div class="container w-75">
            <div class=" text-center">
              <div class="title">
              <h1 class="pb-5">Get in touch</h1></div>
              {{-- <div class=" mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem beatae mollitia animi cumque temporibus ipsum dignissimos velit. Cumque quis, minima officiis aut ab adipisci, velit vitae numquam ipsa commodi laborum.
              </div>  --}}
            </div>
          </div>  
  
          {{-- form  --}}
          <div class="row m-0"> 
          
              <form class=" mx-auto w-75 px-5 pt-5" action="#!"> 
            
                  <div class="form-group">
                      <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                  </div>

                  <div class="form-group form-inline animated zoomIn">
                      <input type="email" id="userEmail" class="form-control mr-1" placeholder="Email address"> 
                      <input type="text" id="userName" class="form-control mr-1" placeholder="Full name"> 
                      <button id="buttonSubmit" class="btn btn-info" type="submit">Send</button>

                  </div>
    
          
              </form> 
        
          </div>
    
  </div>
</div>
  

{{-- ******************* --}}
<!--
<footer>
      

    {{-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-0"> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
          </button>
      
        <div class="collapse navbar-collapse p-0" id="navbarTogglerDemo02">  
          <ul class="navbar-nav tent-center p-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Book Now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Abouts Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Log In</a>
            </li>
          </ul>
        </div>
      </nav> --}}
</footer>
    -->
 
@endsection
