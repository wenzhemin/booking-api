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

        $year = $dt->format('o');
        $week = $dt->format('W');

        $data['year'] = $year;
        $data['week'] = $week;
        $data['dt'] = $dt;

        return view('admin.admincalendar')->with($data);
    }

    
    public function timeslots($duration, $cleanup, $start, $end) {
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
    
            // $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
            $slots[] = $intStart->format("H:i");
        }
    
        return $slots;
    }

}
