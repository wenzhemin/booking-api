@extends('layouts.app')

@section('content')

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Logo</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">  
      <ul class="navbar-nav">
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
  </nav>
  
  <!--FRONTPAGE BANNER-->
  <div class="row banner bg-warning m-0">

    <div class="bg-warning">
      <h1>Bootstrap Tutorial</h1> 
      <p>Bootstrap is the most popular HTML, CSS...</p> 
    </div>
      
  </div>
  




  <!--FRONTPAGE-->
<div class="row bulletpoints1 m-0">
  
  <div class="col-xs-10 offset-xs-1 col-sm-10 offset-sm-1 col-md-8 offset-md-2 offset-lg-3 col-lg-6">
  
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="" class="card-img-top" alt="...">
            </div>
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="" class="card-img-top" alt="...">
            </div>
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="" class="card-img-top" alt="...">
            </div>
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

</div>


<div class="row bulletpoints2 m-0">
  
  <div class="col-xs-10 offset-xs-1 col-sm-10 offset-sm-1 col-md-8 offset-md-2 offset-lg-3 col-lg-6">
      
  </div>
</div>

<div class="row bulletpoints3 m-0">
  
  <div class="col-xs-10 offset-xs-1 col-sm-10 offset-sm-1 col-md-8 offset-md-2 offset-lg-3 col-lg-6">
    <form>
      <div class="form-row">
        <div class="form-group col-sm-12">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-sm-12">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
      </div>

      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>

      <div class="form-row">
        <div class="form-group col-sm-12">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-sm-12">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-sm-12">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
  </div>
  
</div>
@endsection