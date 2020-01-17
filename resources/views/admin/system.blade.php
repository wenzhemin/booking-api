@extends('admin.app')


@section('content')
    <!-- Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Newest bookings</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php $count = 0; ?>
                    @foreach ($bookings as $booking)
                    <?php if($count == 3) break; ?>
                    {{-- <div class="row no-gutters"> --}}
                        <div class="col-lg-12">
                            <div class="card dash-wrapper mt-1">
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th><h6>Name</h6></th>
                                            <th><h6>Chosen raft</h6></th>
                                            <th><h6>Date</h6></th>
                                        </tr>
                                        <tr>
                                            <td><p class="card-text">{{ $booking->name_of_guest }}</p></td>
                                            <td><p class="card-text">{{ $booking->service->name }}</p></td>
                                            <td><p class="card-text">{{ date('Y-m-d', strtotime($booking->date)) }}</p></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                    <?php $count++; ?>
                    @endforeach
                </div>
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </div>
@endsection