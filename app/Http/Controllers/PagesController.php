<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    // public function cal() {
    //     return view('pages.cal');
    // }

    public function dashboard() {
        return view('dashboard.system');
    }

    public function adminbooking() {
        return view('admin.admincalendar');
    }

    public function bookinglayout() {
        return view('admin.system');
    }


}
