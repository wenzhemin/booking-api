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
use Carbon\Carbon;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function index($year = null, $month = null)
    {
        \Log::info('year : '.$year);
        \Log::info('month : '.$month);
        // set selected year and month or default to current year/month
        $datetime = Carbon::now();
        
        if (!$month && !$year) {
            $datetime->setISODate($datetime->format('o'), $datetime->format('W'));
        } else {
            // $datetime->setISODate($year, $month);
            $inputdate = $year.'-'.$month.'-01';
            $datetime = Carbon::createFromFormat('Y-m-d', $inputdate);
        }

        // get all bookings belonging to selected month and year
        $bookings = Booking::whereYear('date', Carbon::parse($datetime->format('Y-m-d'))->year)
            ->whereMonth('date', Carbon::parse($datetime->format('Y-m-d'))->month)
            ->orderBy('date')->orderBy('timeslot')->get();

        $locations = Location::all();
        $services = Service::all();
        $intervals = Interval::all();

        // let's prep data for the view
        $data['locations']  = $locations;
        $data['services']  = $services;
        $data['intervals']  = $intervals;
        $data['bookings']  = $bookings;
        $data['timeslots']  = $this->timeslots();
        $data['date'] = date_format(date_create($datetime), 'Y-m-d');
        $data['month'] = $datetime->month;
        $data['year'] = $datetime->year;

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