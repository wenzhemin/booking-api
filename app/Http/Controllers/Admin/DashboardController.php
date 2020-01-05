<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\User;
use App\Booking;

class DashboardController extends AdminController {
    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $bookings = Booking::all();
        $data['bookings'] = $bookings;

        return view('admin.system')->with($data);
    }

    public function choices() {
        return view('admin.choices');
    }
}
