<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('datetime');
            $table->string('name_of_guest');
            $table->string('phone_no');
            $table->string('email');
            $table->integer('no_of_guests');
            // foreign keys
            $table->integer('location_id')->unsigned();
            $table->integer('buniness_id')->unsigned();
            $table->integer('service_id')->unsigned();
            // asign foreign keys
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('buniness_id')->references('id')->on('businesses');
            $table->foreign('service_id')->references('id')->on('services');
            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
