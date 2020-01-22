@extends('layouts.app')
 

@section('content')

<?php

function build_calendar($month, $year) {

    // SQL Statement moved to BookingsController - result can be found in $bookings variable and used as such here.

     // Create array containing abbreviations of days of week.
    $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    // How many days does this month contain?
    $numberDays = date('t',$firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question?
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    $current_month = date('m');
    $current_year = date('Y');
    $previous_month = date('m', mktime(0, 0, 0, $month-1, 1, $year));
    $previous_year = date('Y', mktime(0, 0, 0, $month-1, 1, $year));
    $next_month = date('m', mktime(0, 0, 0, $month+1, 1, $year));
    $next_year = date('Y', mktime(0, 0, 0, $month+1, 1, $year));

    $calendar = "<table id='calendardates' class='table table-bordered'>";
    $calendar.= "<center><h2 class='calendar-title'>$monthName $year</h2>";

    // $calendar.= "<a class='btn btn-xs btn-book' href='?month=".$previous_month."&year=".$previous_year."'>Previous Month</a> ";
    // $calendar.= " <a class='btn btn-xs btn-book' href='?month=".$current_month."&year=".$current_year."'>Current Month</a> ";
    // $calendar.= "<a class='btn btn-xs btn-book' href='?month=".$next_month."&year=".$next_year."'>Next Month</a></center><br>";

    $calendar.= "<a class='btn btn-xs btn-book' href='/cal/".$previous_year."/".$previous_month."'>Previous Month</a> ";
    $calendar.= " <a class='btn btn-xs btn-book' href='/cal/".$current_year."/".$current_month."'>Current Month</a> ";
    $calendar.= "<a class='btn btn-xs btn-book' href='/cal/".$next_year."/".$next_month."'>Next Month</a></center><br>";



    $calendar .= "<tr>";

    // Create the calendar headers

    foreach($daysOfWeek as $day) {
        $calendar .= "<th  class='header'>$day</th>";
    }

    // Create the rest of the calendar

    // Initiate the day counter, starting with the 1st.

    $currentDay = 1;

    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek is used to
    // ensure that the calendar
    // display consists of exactly 7 columns.

    if ($dayOfWeek > 0) { 
        for($k=0;$k<$dayOfWeek;$k++){
            $calendar .= "<td class='empty'></td>";  
        }
    }
    
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
    while ($currentDay <= $numberDays) {

        // Seventh column (Saturday) reached. Start a new row.
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }
          
        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";

        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;
        $today = $date==date('Y-m-d')? "today" : "";

        if($date < date('Y-m-d')) {
            $calendar.="<td><h4>$currentDay</h4> <button id='bookknap' class='btn btn-danger btn-xs'>N/A</button>";
        }else{
            // $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='/bookings?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
            $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='#' class='bookDate btn btn-success btn-xs' data-dateslot='$date'>Book</a>";
        }
            
          $calendar .="</td>";
          // Increment counters
 
          $currentDay++;
          $dayOfWeek++;
    }
     
     

     // Complete the row of the last week in month, if necessary
    if ($dayOfWeek != 7) { 
        $remainingDays = 7 - $dayOfWeek;
        for($l=0;$l<$remainingDays;$l++){
            $calendar .= "<td class='empty'></td>"; 
        }
    }
    
    $calendar .= "</tr>";

    $calendar .= "</table>";

    echo $calendar;

}
?>
<div class="container-fluid">
  <div class="container-fluid publicCalendar">


<div id="calendarlayout" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            {{ build_calendar($month,$year) }}
        </div>
    </div>
</div> 

<!-- just for dunmping the bookings for the selected month -->
<div id="bookingsdump" class="container">
    <div class="row">
        Selected month and year : [{{ $date }}]
        @foreach($bookings as $booking)
            <div class="col-md-12">
            {{ date_format(date_create($booking->date), 'Y-m-d') }} - {{ $booking->name_of_guest }} - {{ $booking->timeslot }} - {{ $booking->phone_no }} - {{ $booking->email }}
            </div>
        @endforeach
    </div>
</div> 

<!--MODAL-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Book for Date: <span id="dateslot"></span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">                
                <div class="row justify-content-center">
                    <div class="col-12">
                        {{ isset($msg) ? $msg : '' }}
                        @foreach($timeslots as $timeslot)
                            <div class="offset-3 col-6">
                                {{--  time slots  - I replaced bg-success with border --}}
                                <button class="btn border btn-lg btn-block bookTime" data-timeslot="{{ $timeslot }}">{{ $timeslot }}</button>
                            </div>
                        @endforeach
                        <!-- insert Rebacas code here -->
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                    <form action="{{ url('bookings') }}" method="post">
                        @csrf
                        <input name="date" type="hidden" value="{{ $date }}">
                        <div class="form-group">
                            <label for="">Timeslot</label>
                            <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label class="mr-sm-2" for="serviceSelect">Hours</label>
                            <select name="interval_id" class="custom-select mr-sm-2 form-control" id="intervalSelect" required>
                                <option disabled value="" selected hidden>Choose an interval</option>
                                @foreach ($intervals as $interval)
                                    <option value={{ $interval->id }}>{{ $interval->hour }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- test  --}}

                        <!-- <select name="interval_id" class="custom-select mr-sm-2 form-control" id="intervalSelect" required>
                            <option disabled value="" selected hidden>I am tryin'</option>
                            @foreach ($bookings as $booking)
                                <option value={{ $booking->date }}>{{ $booking->timeslot }}</option>
                            @endforeach
                        </select> -->

 
                        {{-- end test  --}}


                        <div class="form-group">
                            <label for="">Name</label>
                            <input required type="text" name="name_of_guest" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input required type="text" name="phone_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input required type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Number of Guests</label>
                            <input required type="text" name="no_of_guests" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2" for="locationSelect">Location</label>
                            <select name="location_id" class="custom-select mr-sm-2 form-control" id="locationSelect" required>
                                <option disabled value="" selected hidden>Choose a location</option>
                                @foreach ($locations as $location)
                                    <option value={{ $location->id }}>{{ $location->address }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mr-sm-2" for="serviceSelect">Service</label>
                            <select name="service_id" class="custom-select mr-sm-2 form-control" id="serviceSelect" required>
                                <option disabled value="" selected hidden>Choose a service</option>
                                @foreach ($services as $service)
                                    <option value={{ $service->id }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-book" name="submit">Book</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection