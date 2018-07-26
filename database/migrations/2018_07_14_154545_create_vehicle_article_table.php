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
            $table->string('title', 255);
            $table->string('description', 2000);
            $table->integer('quantity')->default(1);
            $table->unsignedinteger('userid');
            $table->increments('id');
            
            $table->foreign('userid')->references('id')->on('users');
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
