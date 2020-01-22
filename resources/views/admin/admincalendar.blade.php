@extends('admin.app')

@section('content')

<?php
    use Carbon\Carbon;
?>

<!-- Page content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a class='btn btn-xs btn-back justify-content-center' href="{{ route('admincalendar', ['year' => $year, 'week' => $week - 1]) }}">Last Week</a> <!--Previous week-->
                <a class='btn btn-xs btn-book justify-content-center' href="{{ route('admincalendar', ['year' => $year, 'week' => $week + 1]) }}">Next Week</a> <!--Next week-->
                <br>
                <table class="table table-striped table-hover table-dark table-bordered dashcalendar">
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            @foreach($weekdates as $weekdate)
                                <th>{{ $weekdate['day_name'] }}<br>{{ $weekdate['dis_date'] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($timeslots as $timeslot)
                        <tr>
                            <th scope="row">{{ $timeslot }}</th>
                            @foreach($weekdates as $weekdate)
                                <td>
                                    @foreach($bookings as $booking)
                                        @if($booking->timeslot == $timeslot)
                                            @if(Carbon::parse($booking->date)->eq(Carbon::parse($weekdate['date'])))
                                                <button onclick="assignValuesToModal({{$booking}})" data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-danger btn-sm" style="margin-bottom:2px">{{ $booking->name_of_guest }}</button><br>
                                            @endif
                                        @endif
                                    @endforeach
                                </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Booking:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" id="bookingform">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="post" id="formUpdate">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <input name="id" id="id" type="hidden" value="">
                                        <div class="form-group" data-role="fieldcontain">
                                            <label for="date">Booking Date:</label>
                                            <input class="form-control" type="text" name="date" id="date" value="" placeholder="" />
                                        </div>
                                        <div class="form-group" data-role="fieldcontain">
                                            <label for="date">Time-Slot:</label>
                                            <input class="form-control" type="text" name="timeslot" id="timeslot" value="" placeholder="" />
                                        </div>
                                        <div class="form-group" data-role="fieldcontain">
                                            <label for="name_of_guest">Name of Guest:</label>
                                            <input class="form-control" type="text" name="name_of_guest" id="name_of_guest" value="" placeholder="" />
                                        </div>
                                        <div class="form-group" data-role="fieldcontain">
                                            <label for="phone_no">Phone No.:</label>
                                            <input class="form-control" type="text" name="phone_no" id="phone_no" value="" placeholder="" />
                                        </div>
                                        <div class="form-group" data-role="fieldcontain">
                                            <label for="email">Email:</label>
                                            <input class="form-control" type="text" name="email" id="email" value="" placeholder="" />
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" data-role="fieldcontain">
                                        <label for="no_of_guests">Number of Guests:</label>
                                        <input class="form-control" type="text" name="no_of_guests" id="no_of_guests" value="" placeholder="" />
                                    </div>
                                    <div class="form-group" data-role="fieldcontain">
                                        <label for="interval_id">Interval:</label>
                                        <select class="form-control" name="interval_id" class="" id="interval_id" required>
                                            @foreach($intervals as $interval)
                                                <option value={{ $interval->id }}>{{ $interval->hour }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" data-role="fieldcontain">
                                        <label for="location_id">Location:</label>
                                        <select class="form-control" name="location_id" class="" id="location_id" required>
                                            @foreach($locations as $location)
                                                <option value={{ $location->id }}>{{ $location->address }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" data-role="fieldcontain">
                                        <label for="service_id">Service:</label>
                                        <select class="form-control" name="service_id" class="" id="service_id" required>
                                            @foreach($services as $service)
                                                <option value={{ $service->id }}>{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="submit"
                                    class="btn btn-save" 
                                    id="myButton1"> Save
                                </button>
                                    </form>
                                    <form action="" method="post" id="formDelete">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit"
                                            class="btn btn-book"
                                            id="delete-button"> Delete
                                        </button>
                                    </form>
                            </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
        function assignValuesToModal(booking) {
            var urlUpdate = '/bookings/' + booking.id;
            $('#formUpdate').attr('action', urlUpdate);
            $('#id').val(booking.id);
            var bookingDate = booking.date;
            var bookingDateFomatted = bookingDate.substring(0, 10)
            $('#date').val(bookingDateFomatted);
            $('#timeslot').val(booking.timeslot);
            $('#name_of_guest').val(booking.name_of_guest);
            $('#phone_no').val(booking.phone_no);
            $('#email').val(booking.email);
            $('#no_of_guests').val(booking.no_of_guests);
            $('#interval_id').val(booking.interval_id);
            $('#location_id').val(booking.location_id);
            $('#service_id').val(booking.service_id);
            
        }
    </script>
    <script type="text/javascript">
        $("#delete-button").click(function(){
            if(confirm("Are you sure you want to delete this booking?")){
                var deleteId = $('#id').val();
                var urlDelete = '/bookings/' + deleteId;
                $('#formDelete').attr('action', urlDelete);
            }
            else{
                return false;
            }
        });
    </script>
@endsection