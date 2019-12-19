<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\User;

class CalendarController extends AdminController {
    
    public function index($year = null, $week = null) {

        \Log::info('=================================');
        \Log::info('Year: '.$year);
        \Log::info('Week: '.$week);

        $dt = new \DateTime;
        if (!$week && !$year) {
            \Log::info('Vi har IKKE data ');
            $dt->setISODate($dt->format('o'), $dt->format('W'));
        } else {
            \Log::info('Vi har data ');
            $dt->setISODate($year, $week);
        }


        // if (isset($_GET['year']) && isset($_GET['week'])) {
        //     $dt->setISODate($_GET['year'], $_GET['week']);
        // } else {
        //     $dt->setISODate($dt->format('o'), $dt->format('W'));
        // }


        $year = $dt->format('o');
        $week = $dt->format('W');
       

        $data['year'] = $year;
        $data['week'] = $week;
        $data['dt'] = $dt;

        return view('admin.admincalendar')->with($data);
    }

}
