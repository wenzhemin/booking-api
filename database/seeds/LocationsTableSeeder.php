<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'address' => 'Maglegaardsvej 2, 4000 Roskilde'
            ],
            [
                'address' => 'Jernbanegade 3A, 4000 Roskilde'
            ]
        ]);
    }
}