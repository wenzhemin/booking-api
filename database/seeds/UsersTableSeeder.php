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
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ],
            [
                'name' => 'Linus Kinzi-Paludan',
                'email' => 'skinzip@gmail.com',
                'password' => Hash::make('bastards'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ],
            [
                'name' => 'Rebeca',
                'email' => 'isusnavi2005@gmail.com',
                'password' => Hash::make('qaz123///'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ],
            [
                'name' => 'Zhemin Wen',
                'email' => 'zhem0004@edu.easj.dk',
                'password' => Hash::make('changemetosomethingbetter'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ],
            [
                'name' => 'Niclas Brink Vetter',
                'email' => 'vetzmeister@gmail.com',
                'password' => Hash::make('vetter1234'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
        ]
        ]);
    }
}