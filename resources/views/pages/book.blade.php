@extends('layouts.app')

@section('content')
<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
    
}

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
$duration = 20;
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

        $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
    }

    return $slots;
}

?>
<h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
<div class="row">
    <div class="col-md-12">
    <?php echo isset($msg)?$msg:""; ?>
        <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
            foreach($timeslots as $ts){
        ?>
            <div class="col-md-2">
                <div class="form-group">
                        <button class="btn btn-success book" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?></button>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--MODAL-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Booking: <span id="slot"></span></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                    <form action="{{url('bookings')}}" method="post">
                        @csrf
                        <input name="date" type="hidden" value="<?php echo $date;?>">
                        <div class="form-group">
                            <label for="">Timeslot</label>
                            <input required type="text" readonly name="time" id="timeslot" class="form-control">
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
                        <div class="form-group">
                            <label for="">Location(ID for now)</label>
                            <input required type="text" name="location_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Service(ID for now)</label>
                            <input required type="text" name="service_id" class="form-control">
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