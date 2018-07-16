<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclearticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VEHICLE_ARTICLE', function(Blueprint $table) {
            $table->string('ID_Vehicle_ARTICLE', 10);
            $table->string('TITLE', 255);
            $table->string('DESCRIPTION', 2000);
            $table->integer('QUANTITY')->default(1);
            $table->string('USERID', 10);
            
            $table->primary('ID_VEHICLE_ARTICLE');
        
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
        Schema::drop('VEHICLE_ARTICLE');

    }
}
