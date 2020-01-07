@extends('admin.app')


@section('content')
    <!-- Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 dashboard-border">
                    <h1>Newest bookings</h1>
                </div>
                <table class="table table-striped table-hover table-dark table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Booked service</th>
                        <th>Date</th>
                    </tr>
                    <?php $count = 0; ?>
                    @foreach ($bookings as $booking)
                    <?php if($count == 3) break; ?>
                    <tr>
                        <td>{{ $booking->name_of_guest }}</td>
                        <td>{{ $booking->service_id }}</td>
                        <td>{{ $booking->date }}</td>
                    </tr>
                    <?php $count++; ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection