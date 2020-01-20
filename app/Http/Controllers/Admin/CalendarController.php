<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\User;
use App\Booking;
use App\Location;
use App\Service;
use App\Interval;
use Carbon\Carbon;

class CalendarController extends AdminController {
    
    public function index($year = null, $week = null) {

        // set selected year and week or default to current year/week
        $datetime = new \DateTime;
        if (!$week && !$year) {
            $datetime->setISODate($datetime->format('o'), $datetime->format('W'));
        } else {
            $datetime->setISODate($year, $week);
        }

        $year = $datetime->format('o');
        $week = $datetime->format('W');


        // get all bookings belonging to selected week
        $bookings = Booking::whereBetween('date', [
            Carbon::parse($datetime->format('Y-m-d'))->startOfWeek(),
            Carbon::parse($datetime->format('Y-m-d'))->endOfWeek()
        ])->orderBy('timeslot')->orderBy('date')->get();

        // get all locations, services and intervals. 
        $locations = Location::all();
        $services = Service::all();
        $intervals = Interval::all();
        
        // set view variables
        $data['bookings']   = $bookings;
        $data['year']       = $year;
        $data['week']       = $week;
        $data['datetime']   = $datetime;
        $data['timeslots']  = $this->timeslots();
        $data['weekdates']  = $this->get_weekdates_array($datetime);
        $data['locations']   = $locations;
        $data['services']   = $services;
        $data['intervals']   = $intervals;

        return view('admin.admincalendar')->with($data);
    }

    private function get_weekdates_array($datetime) {
        $startDate = Carbon::parse($datetime->format('Y-m-d'))->startOfWeek();
        $endDate = Carbon::parse($datetime->format('Y-m-d'))->endOfWeek();
        //Init interval
        $dateInterval = \DateInterval::createFromDateString('1 day');
        $dateperiod = new \DatePeriod($startDate, $dateInterval, $endDate);
        $weekdates = [];

        foreach ($dateperiod as $displaydate) {
          $weekdates[] = [
                'day_name' => $displaydate->format('l'), 
                'dis_date' => $displaydate->format('d M Y'),
                'date' => $displaydate->format('Y-m-d')
            ];
        }
        return $weekdates;
    }
    
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
