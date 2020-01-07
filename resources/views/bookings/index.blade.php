@extends('layouts.app')

@section('content')
    <h1>All Bookings</h1>
    <p>This is all bookings. </p>

    @if(count($bookings) > 0)
        @foreach($bookings as $booking)
            <div class="card p-3 mt-3 mb-3">
                <h3>{{$booking->name_of_guest}}</a></h3>
                <small>Booked on {{$booking->datetime}}</small>
            </div>
        @endforeach
    @else
        <p>No bookings found</p>
    @endif
@endsection