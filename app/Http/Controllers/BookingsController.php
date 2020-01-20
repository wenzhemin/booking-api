<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingCompleted;
use App\Booking;
use App\Location;
use App\Service;
use App\Interval;
use App\Http\Requests\BookingRequest;
// use DateTime;
// use Carbon\Carbon;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function index()
    {

        $locations = Location::all();
        $services = Service::all();
        $intervals = Interval::all();

        // THIS :
        // $mysqli = new mysqli(env('DB_HOST', '127.0.0.1'), env('DB_USERNAME', 'root'), env('DB_PASSWORD', 'root'), env('DB_DATABASE', 'bookingapi'));
        // $stmt = $mysqli->prepare("select * from bookings where date = ?");
        // $stmt->bind_param('s', $date);
        // $bookings = array();
        // if($stmt->execute()){
        //     $result = $stmt->get_result();
        //     if($result->num_rows > 0){
        //         while($row = $result->fetch_assoc()){
        //             $bookings[] = $row['timeslot'];
        //         }
        //         \Log::info($bookings);
        //         $stmt->close();
        //     }
        // }

        // HAS BEEN REPLACED WITH THIS:
        // $bookings = Booking::where('date', '=', date('Y-m-d'))->pluck('timeslot')->toArray();
        $bookings = Booking::all();

        $data['locations']  = $locations;
        $data['services']  = $services;
        $data['intervals']  = $intervals;
        $data['bookings']  = $bookings;
        $data['timeslots']  = $this->timeslots();

     // reeb try
    //  $data['bookings'] = $bookings;
    // $booking_dates = Booking::whereDate($date)->first();
    // $default = Booking::where('id',1)
    //        ->whereIn('id',['date','timeslot'])->get(); 


        return view('pages.cal')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $businessId = 1;
        // Create Booking
        $booking = new Booking;

        // Convert datetime
        $booking->date = $request->input('date');
        $booking->timeslot = $request->input('timeslot');
        $booking->interval_id = $request->input('interval_id');
        $booking->name_of_guest = $request->input('name_of_guest');
        $booking->phone_no = $request->input('phone_no');
        $booking->email = $request->input('email');
        $booking->no_of_guests = $request->input('no_of_guests');
        $booking->location_id = $request->input('location_id');
        $booking->business_id = $businessId;
        $booking->service_id = $request->input('service_id');
        $booking->save();

        Mail::to($booking->email)->send(new BookingCompleted($booking));

        return view('pages.confirmation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $businessId = 1;
        // Create Booking
        $booking = Booking::find($id);

        // Convert datetime
        $booking->date = $request->input('date');
        $booking->timeslot = $request->input('timeslot');
        $booking->interval_id = $request->input('interval_id');
        $booking->name_of_guest = $request->input('name_of_guest');
        $booking->phone_no = $request->input('phone_no');
        $booking->email = $request->input('email');
        $booking->no_of_guests = $request->input('no_of_guests');
        $booking->location_id = $request->input('location_id');
        $booking->business_id = $businessId;
        $booking->service_id = $request->input('service_id');
        $booking->save();

        Mail::to($booking->email)->send(new BookingCompleted($booking));

        return view('pages.confirmation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return view('pages.confirmation');
    }


    // Custom functions
    public function cal()
    {
        
    }

    // Helper functions
    public function timeslots() {
        //Duration is the amount of time spend on each session (Bookable time)
        $duration = 60;
        //Cleanup is the amount of time needed to prepare next sessions(to clean or prep something required to next customer)
        $cleanup = 0;
        //The opening hours for the business 
        $start = "09:00";
        $end = "17:00";

        $start = new \DateTime($start);
        $end = new \DateTime($end);
        $interval = new \DateInterval("PT".$duration."M");
        $cleanupInterval = new \DateInterval("PT".$cleanup."M");
        $slots = array();
    
        for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
            $endPeriod = clone $intStart;
            $endPeriod->add($interval);
            if($endPeriod>$end) {
                break;
            }
            $slots[] = $intStart->format("H:i");
        }
    
        return $slots;
    }

     
}