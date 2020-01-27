@extends('layouts.app')

@section('content')

<div id="confirmation">
    <div class="text-center">
        <img src="{{ asset('../assets/img/circle-logo.png') }}" width="200" height="200" alt="Booky circle logo">
        <h1 class="display-3">Thank You!</h1>
        <h2 class="display-3">Your booking has been successful, hope you have fun.</h2>
        <p class="lead"><strong>Please check your email</strong> to review your booking information.</p>
        <hr>
        <p>
        Having trouble? You are always welcome to contact us.
        </p>
        <p class="lead">
        <a class="btn btn-back btn-sm" href="{{ url('/') }}" role="button">Continue to homepage</a>
        </p>
    </div>
</div>
  



@endsection