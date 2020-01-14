<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'date' => '2020-01-10 00:00:00',
                'timeslot' => '10:00',
                'name_of_guest' => 'Norman Pedersen',
                'phone_no' => '12345678',
                'email' => 'Norman-pedersen@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-12 00:00:00',
                'timeslot' => '15:00',
                'name_of_guest' => 'Fie laursen',
                'phone_no' => '12345678',
                'email' => 'fl@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-09 00:00:00',
                'timeslot' => '18:00',
                'name_of_guest' => 'Henrik Mogensen',
                'phone_no' => '12345678',
                'email' => 'hm@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-09 00:00:00',
                'timeslot' => '13:00',
                'name_of_guest' => 'Niels Christiansen',
                'phone_no' => '12345678',
                'email' => 'Niels@stofanet.dk',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-06 00:00:00',
                'timeslot' => '16:00',
                'name_of_guest' => 'Julie petersen',
                'phone_no' => '12345678',
                'email' => 'jp@yahoo.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-04 00:00:00',
                'timeslot' => '17:00',
                'name_of_guest' => 'Frederikke Mortensen',
                'phone_no' => '12345678',
                'email' => 'fm@yousee.dk',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-08 00:00:00',
                'timeslot' => '14:00',
                'name_of_guest' => 'Line Mikkelsen',
                'phone_no' => '12345678',
                'email' => 'lm@mail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-08 00:00:00',
                'timeslot' => '11:00',
                'name_of_guest' => 'Test McTest',
                'phone_no' => '12345678',
                'email' => 'TM@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-07 00:00:00',
                'timeslot' => '10:00',
                'name_of_guest' => 'Åge Larsen',
                'phone_no' => '12345678',
                'email' => 'testn@test.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-11 00:00:00',
                'timeslot' => '12:00',
                'name_of_guest' => 'Børge',
                'phone_no' => '12345678',
                'email' => 'test@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],

            [
                'date' => '2020-01-14 00:00:00',
                'timeslot' => '10:00',
                'name_of_guest' => 'Norman Pedersen',
                'phone_no' => '12345678',
                'email' => 'Norman-pedersen@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-19 00:00:00',
                'timeslot' => '15:00',
                'name_of_guest' => 'Fie laursen',
                'phone_no' => '12345678',
                'email' => 'fl@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-17 00:00:00',
                'timeslot' => '18:00',
                'name_of_guest' => 'Henrik Mogensen',
                'phone_no' => '12345678',
                'email' => 'hm@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-18 00:00:00',
                'timeslot' => '13:00',
                'name_of_guest' => 'Niels Christiansen',
                'phone_no' => '12345678',
                'email' => 'Niels@stofanet.dk',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-16 00:00:00',
                'timeslot' => '16:00',
                'name_of_guest' => 'Julie petersen',
                'phone_no' => '12345678',
                'email' => 'jp@yahoo.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-13 00:00:00',
                'timeslot' => '17:00',
                'name_of_guest' => 'Frederikke Mortensen',
                'phone_no' => '12345678',
                'email' => 'fm@yousee.dk',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-15 00:00:00',
                'timeslot' => '14:00',
                'name_of_guest' => 'Line Mikkelsen',
                'phone_no' => '12345678',
                'email' => 'lm@mail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-15 00:00:00',
                'timeslot' => '11:00',
                'name_of_guest' => 'Test McTest',
                'phone_no' => '12345678',
                'email' => 'TM@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-14 00:00:00',
                'timeslot' => '10:00',
                'name_of_guest' => 'Åge Larsen',
                'phone_no' => '12345678',
                'email' => 'testn@test.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-18 00:00:00',
                'timeslot' => '12:00',
                'name_of_guest' => 'Børge',
                'phone_no' => '12345678',
                'email' => 'test@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],


            [
                'date' => '2020-01-20 00:00:00',
                'timeslot' => '10:00',
                'name_of_guest' => 'Norman Pedersen',
                'phone_no' => '12345678',
                'email' => 'Norman-pedersen@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-21 00:00:00',
                'timeslot' => '15:00',
                'name_of_guest' => 'Fie laursen',
                'phone_no' => '12345678',
                'email' => 'fl@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-22 00:00:00',
                'timeslot' => '18:00',
                'name_of_guest' => 'Henrik Mogensen',
                'phone_no' => '12345678',
                'email' => 'hm@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-23 00:00:00',
                'timeslot' => '13:00',
                'name_of_guest' => 'Niels Christiansen',
                'phone_no' => '12345678',
                'email' => 'Niels@stofanet.dk',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-24 00:00:00',
                'timeslot' => '16:00',
                'name_of_guest' => 'Julie petersen',
                'phone_no' => '12345678',
                'email' => 'jp@yahoo.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-25 00:00:00',
                'timeslot' => '17:00',
                'name_of_guest' => 'Frederikke Mortensen',
                'phone_no' => '12345678',
                'email' => 'fm@yousee.dk',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-26 00:00:00',
                'timeslot' => '14:00',
                'name_of_guest' => 'Line Mikkelsen',
                'phone_no' => '12345678',
                'email' => 'lm@mail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-20 00:00:00',
                'timeslot' => '11:00',
                'name_of_guest' => 'Test McTest',
                'phone_no' => '12345678',
                'email' => 'TM@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-21 00:00:00',
                'timeslot' => '10:00',
                'name_of_guest' => 'Åge Larsen',
                'phone_no' => '12345678',
                'email' => 'testn@test.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
            [
                'date' => '2020-01-22 00:00:00',
                'timeslot' => '12:00',
                'name_of_guest' => 'Børge',
                'phone_no' => '12345678',
                'email' => 'test@gmail.com',
                'no_of_guests' => rand(1,25),
                'interval_id' => rand(1,3),
                'location_id' => rand(1,2),
                'business_id' => rand(1,2),
                'service_id' => rand(1,3),
            ],
        ]);
    }
}