@extends('layouts.app')

@section('content')

   
  
  
{{-- header  --}}
<div class="row h-75 m-0" id="header"> 
   <div class="container my-auto">
    <div class=" text-center">
      <h1 class="pb-5">We make booking great again!</h1>
      <div class="w-25 mx-auto">
         Customize to YOUR needs
         <hr >
         Easy to integrate to existing website
         <hr>
         We help you all the way
      </div>
  </div> 
   </div>
</div>

{{-- create  --}}
<div class="row h-75 m-0" id="create">
  <div class="container w-50">
    <div class=" text-center">
      <h1 class="pb-5 text-danger">Creating your own booking system</h1>
      <div class=" mx-auto">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem beatae mollitia animi cumque temporibus ipsum dignissimos velit. Cumque quis, minima officiis aut ab adipisci, velit vitae numquam ipsa commodi laborum.
      </div> 
    </div>
  </div>

  {{-- cards  --}}
  <div class="row cards px-5 m-0"> 
    <div class="col-md-4 d-flex justify-content-center">

        <span class="fa-stack fa-2x fa-lg pr-5 pt-2 text-danger">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <strong class="fa-stack-1x">
                1   
            </strong>
        </span>
      <div class="card border-0 w-50">
        <div class="card-body">
          <h5 class="card-title text-danger mt-0 pt-0">Card title</h5> 
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
       
      <span class="fa-stack fa-2x pr-5 pt-2 text-danger">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <strong class="fa-stack-1x">
               2
            </strong>
        </span>
        
        <div class="card border-0 w-50">
        <div class="card-body">
          <h5 class="card-title text-danger mt-0 pt-0">Card title</h5> 
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
      
        <span class="fa-stack fa-2x fa-lg pr-5 pt-2 text-danger">
            <i class="fa fa-square-o fa-stack-2x"></i>
            <strong class="fa-stack-1x">
                1   
            </strong>
        </span>


      <div class="card border-0 w-50">
        <div class="card-body">
          <h5 class="card-title text-danger mt-0 pt-0">Card title</h5> 
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div> 
  </div>
   
</div>

{{-- ******************* --}}

<div class="row h-75 mx-0" id="existing-booking"> 
        <div class="container">
          <div class=" text-center">
            <h1 class="pb-5 text-danger">Existing booking systems</h1>
          </div> 
        </div>
  {{-- cards  --}}
  <div class="row cards px-5 m-0 justify-content-center">

      <div class="col-md-4"> 
          <h5 class="text-danger mt-0 pt-0 w-75 mx-auto">Customer 1</h5> 
        <div class="card border-0 w-75 mx-auto">
            <div class="card-body">   
                <a href="www.google.com">
                    <img src="assets/trump.jpg" alt="" class="w-100">
                </a>
              </div>
        </div>
      </div> 



      <div class="col-md-4"> 
          <h5 class="text-danger mt-0 pt-0 w-75 mx-auto">Customer 2</h5> 
          <div class="card border-0 w-75 mx-auto">
              <div class="card-body">   
                  <a href="www.google.com">
                      <img src="assets/trump.jpg" alt="" class="w-100">
                  </a>
                </div>
          </div>
      </div>  
        
        
      
      <div class="col-md-4"> 
          <h5 class="text-danger mt-0 pt-0 w-75 mx-auto">Customer 3</h5> 
          <div class="card border-0 w-75 mx-auto">
              <div class="card-body">   
                <a href="www.google.com">
                    <img src="assets/trump.jpg" alt="" class="w-100">
                </a>
              </div>
            </div>  
      </div> 

  </div>
</div>
 
{{-- ******************* --}}
 
  <div class="row h-75 mx-0 d-block" id="connect">  
      <div class="container w-50">
          <div class=" text-center">
            <h1 class="pb-5 text-danger">Get in touch</h1>
            <div class=" mx-auto">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem beatae mollitia animi cumque temporibus ipsum dignissimos velit. Cumque quis, minima officiis aut ab adipisci, velit vitae numquam ipsa commodi laborum.
            </div> 
          </div>
        </div>  
 
        {{-- form  --}}
        <div class="row m-0"> 
        
            <form class=" mx-auto w-50 px-5 pt-5" action="#!"> 
           
                <div class="form-group">
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                </div>

                <div class="form-group form-inline">
                    <input type="email" id="email" class="form-control mr-1" placeholder="Email address"> 
                    <input type="text" id="name" class="form-control mr-1" placeholder="Full name"> 
                    <button id="submit" class="btn btn-info" type="submit">Send</button>

                </div>
  
        
            </form> 
      
        </div>
  
  </div>
  

{{-- ******************* --}}

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

 
@endsection

<style>
#header{
  background-color: antiquewhite;
}
hr  {
  border-top: 0.15rem solid red !important;
}



#create, #connect{
  padding-top: 5%;
  background-color: white;
}
.cards{
  padding-top: 4%;
}
 

#existing-booking{
  padding-top: 5%;
  background-color: antiquewhite;
}

#email, #name, #submit{
  width: 33%; 
}
 
textarea{
  border: solid 2px red;
}

 
 ul li{
   display: inline;
 }
</style>