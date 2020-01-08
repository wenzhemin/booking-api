<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\User;
use DatabaseTransactions;

class UserModelTest extends TestCase
{
    // use DatabaseTransactions;
    
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    /**@test */
    // public function user_has_full_name_attribute()
    // {
    //     //create user
    //     $user= User::create(['name'=>'ReebTest','lastname'=>'BoTest', 
    //                         'email'=>'email@test.com', 
    //                         'password'=>'secret']);
    //     //assert
    //     $this->assertEquals('Reeb Bo', $user->fullname);
    // }

    public function testDatabaseRecord()
    {
        $this-> assertDatabaseHas('users',['email'=>'isusnavi2005@gmail.com']);
    }
}