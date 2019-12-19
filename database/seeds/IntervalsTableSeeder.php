<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class IntervalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intervals')->insert([
            [
                'hour' => 1
            ],
            [
                'hour' => 2
            ],
            [
                'hour' => 3
            ]
        ]);
    }
}