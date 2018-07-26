<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalagencyTable extends Migration
{
    /**
     * Run the migrations.
     * choukri
     * @return void
     */
    public function up()
    {
        Schema::create('rental_agency', function(Blueprint $table) {
            $table->string('address', 80);
            $table->string('name', 255);
            $table->string('city', 255);
            $table->string('vehicle_number', 255);
            $table->unsignedinteger('ownerid');
            $table->increments('id');
            
            $table->foreign('ownerid')->references('id')->on('users');
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
        Schema::drop('RENTAL_AGENCY');

    }
}
