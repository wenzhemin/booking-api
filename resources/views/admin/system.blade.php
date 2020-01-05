@extends('admin.app')


@section('content')
    <!-- Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 dashboard-border">
                    <h1>Newest bookings</h1>
                </div>
                @foreach ($bookings as $booking)
                <div class='row no-gutters support-wrapper'>
                    <div class='col-sm-6'>
                        <p style="color: black"><strong>{{ $booking->service_id }}</strong></p>
                        <p>{{ $booking->name_of_guest }}</p>
                    </div>   
                    <div class='col-sm'>
                        <p><strong>Date</strong></p>
                        <p>{{ $booking->date }}</p>
                    </div>  
                </div>  
                @endforeach
            </div>
        </div>
    </div>
@endsection