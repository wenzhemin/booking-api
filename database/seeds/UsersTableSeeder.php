<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Claus Paludan',
                'email' => 'claus.paludan@gmail.com',
                'password' => Hash::make('fuckheads'),
            ],
            [
                'name' => 'Linus Kinzi-Paludan',
                'email' => 'skinzip@gmail.com',
                'password' => Hash::make('changemetosomethingbetter'),
            ],
            [
                'name' => 'Rebeca',
                'email' => 'dummy@dummy.org',
                'password' => Hash::make('changemetosomethingbetter'),
            ],
            [
                'name' => 'Zhemin Wen',
                'email' => 'zhem0004@edu.easj.dk',
                'password' => Hash::make('changemetosomethingbetter'),
            ],
            [
                'name' => 'Niclas Brink Vetter',
                'email' => 'vetzmeister@gmail.com',
                'password' => Hash::make('changemetosomethingbetter'),
            ]
        ]);
    }
}