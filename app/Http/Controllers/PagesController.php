<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function test() {
        return view('pages.test');
    }

    public function calendar() {
        return view('pages.calendar');
    }

    public function book() {
        return view('pages.booki');
    }

}
