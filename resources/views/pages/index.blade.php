@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="container-fluid banner">
		<div class="jumbotron jumbotron-fluid jumbotronbanner">
			<div class="container my-auto h"> 
				<div class="typewriter">     
					<h2 class="display-4 text-center">WE CUSTOMIZE BOOKINGS!</h2>
					<p class="lead w-75 mx-auto text-center">We create bookings experiences for every business. <br> Check out how easy you can begin, getting reservations for your clients</p>  
				</div>
			</div>   
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container-fluid stepsection">
		<div class="container">                
			<h1 class="pb-5 teamtext text-center">Four easy steps:</h1>  
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

{{-- ********** Get in touch ********* --}}
<div class="container-fluid">
	<div class="container-fluid stepsection"> 
		<div class="container w-75">
			<div class=" text-center">
				<div class="">
				<h1 class="pb-5">Get in touch</h1></div>
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
@endsection
