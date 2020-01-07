<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

     //this is testing if the routes exists -- it will pass even if the route isn't returning anything
   
     public function testBasicCalTest()
    {
        $response = $this->get('/cal');

        $response->assertStatus(200);
    }

    /** @test */
    //test if a route returns something
    public function cal_route_returning_something()
    {
        $response = $this->get('/cal');
        dd($response);
       
    }


// assertsee - to test if it contains a string
    public function testBookingString()
    {
        $response = $this->get('/');

        $response->assertSee('alegria');
    }

    
    // assertSeeInOrder 
    public function testStringsInOrder()
    {
        $response = $this->get('/');

        $response->assertSeeInOrder(['booking', 'great', 'integrate']);
    }
}