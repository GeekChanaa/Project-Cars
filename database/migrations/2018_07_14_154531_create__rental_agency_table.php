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
        Schema::create('RENTAL_AGENCY', function(Blueprint $table) {
            $table->string('ID_RENTAL_AGENCY', 10);
            $table->string('ADDRESS', 80);
            $table->string('NAME', 255);
            $table->string('CITY', 255);
            $table->string('VEHICLE_NUMBER', 255);
            $table->string('OWNERID', 10);
            
            $table->primary('ID_RENTAL_AGENCY');
        
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
