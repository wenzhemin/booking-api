<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Location;
use App\Service;
use DateTime;
use Carbon\Carbon;

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

        $data = [
            'locations'  => $locations,
            'services'   => $services
        ];

        return view('pages.cal')->with('data', $data);
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
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
            'hours' => 'required',
            'name_of_guest' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
            'no_of_guests' => 'required',
            'location_id' => 'required',
            'service_id' => 'required'
        ]);

        $businessId = 1;
        // Create Booking
        $booking = new Booking;

        // Convert datetime
        $date = $request->input('date');
        $time = $request->input('time');
        $hours = $request->input('hours');
        $datetime = $date." ".$time;
        $start_datetime = new DateTime($datetime);
        $end_datetime = Carbon::parse($start_datetime);
        $end_datetime->addHours($hours);


        $booking->start_datetime = $start_datetime;
        $booking->end_datetime = $end_datetime;
        $booking->name_of_guest = $request->input('name_of_guest');
        $booking->phone_no = $request->input('phone_no');
        $booking->email = $request->input('email');
        $booking->no_of_guests = $request->input('no_of_guests');
        $booking->location_id = $request->input('location_id');
        $booking->buniness_id = $businessId;
        $booking->service_id = $request->input('service_id');
        $booking->save();


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // Custom functions
    public function cal()
    {
        
    }
}
