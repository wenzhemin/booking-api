@extends('layouts.app')

@section('content')

<?php

$date = date('Y-m-d');
// if(isset($_GET['date'])){
//     $date = $_GET['date'];
    
// }

// if(isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $timeslot = $_POST['timeslot'];
//     $mysqli = new mysqli('127.0.0.1', 'root', '', 'bookingapi');
//     $stmt = $mysqli->prepare("INSERT INTO bookings (name, timeslot, email, date) VALUES (?,?,?,?)");
//     $stmt->bind_param('ssss', $name, $timeslot, $email, $date);
//     $stmt->execute();
//     $msg = "<div class='alert alert-success'>Booking Successfull</div>";
//     $stmt->close();
//     $mysqli->close();
// }

//Duration is the amount of time spend on each session (Bookable time)
$duration = 60;
//Cleanup is the amount of time needed to prepare next sessions(to clean or prep something required to next customer)
$cleanup = 0;
//The opening hours for the business 
$start = "09:00";
$end = "17:00";

function timeslots($duration, $cleanup, $start, $end) {
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end) {
            break;
        }

        // $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        $slots[] = $intStart->format("H:i");
    }

    return $slots;
}

function build_calendar($month, $year) {
    // $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'bookingapi');
    // $stmt = $mysqli->prepare("select * from bookings where MONTH(datetime) = ? AND YEAR(datetime) = ?");


    // $mysqli = new mysqli('127.0.0.1', 'root', '', 'bookingapi');
    // $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date) = ?");
    // $stmt->bind_param('ss', $month, $year);
    // $bookings = array();
    // if($stmt->execute()){
    //     $result = $stmt->get_result();
    //     if($result->num_rows>0){
    //         while($row = $result->fetch_assoc()){
    //             $bookings[] = $row['date'];
    //         }
            
    //         $stmt->close();
    //     }
    // }

    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'bookingapi');
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
    
     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers
     $datetoday = date('Y-m-d');
    
    
    
    $calendar = "<table id='calendardates' class='table table-bordered'>";
    $calendar.= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    
    $calendar.= " <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    
        
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
         if($date<date('Y-m-d')){
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
<div id="calendarlayout" class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                $dateComponents = getdate();
                if(isset($_GET['month']) && isset($_GET['year'])){
                    $month = $_GET['month']; 			     
                    $year = $_GET['year'];
                }else{
                    $month = $dateComponents['mon']; 			     
                    $year = $dateComponents['year'];
                }
                echo build_calendar($month,$year);
            ?>
        </div>
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
                    <?php echo isset($msg)?$msg:""; ?>
                        <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
                            foreach($timeslots as $ts){
                        ?>
                            <div class="offset-3 col-6">
                                
                                <button class="btn btn-success btn-lg btn-block bookTime" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?></button>
                                
                            </div>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                    <form action="{{url('bookings')}}" method="post">
                        @csrf
                        <input name="date" type="hidden" value="<?php echo $date;?>">
                        <div class="form-group">
                            <label for="">Timeslot</label>
                            <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Hours</label>
                            <input required type="text" name="interval" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label class="mr-sm-2" for="serviceSelect">Hours</label>
                            <select name="interval_id" class="custom-select mr-sm-2 form-control" id="intervalSelect" required>
                                <option disabled value="" selected hidden>Choose an interval</option>
                                @foreach ($data['intervals'] as $interval)
                                    <option value={{ $interval->id }}>{{ $interval->hour }}</option>
                                @endforeach
                            </select>
                        </div>
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
                        {{-- <div class="form-group">
                            <label for="">Location(ID for now)</label>
                            <input required type="text" name="location_id" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label class="mr-sm-2" for="locationSelect">Location</label>
                            <select name="location_id" class="custom-select mr-sm-2 form-control" id="locationSelect" required>
                                <option disabled value="" selected hidden>Choose a location</option>
                                @foreach ($data['locations'] as $location)
                                    <option value={{ $location->id }}>{{ $location->address }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Service(ID for now)</label>
                            <input required type="text" name="service_id" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label class="mr-sm-2" for="serviceSelect">Service</label>
                            <select name="service_id" class="custom-select mr-sm-2 form-control" id="serviceSelect" required>
                                <option disabled value="" selected hidden>Choose a service</option>
                                @foreach ($data['services'] as $service)
                                    <option value={{ $service->id }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection