<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarwashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carwash', function(Blueprint $table) {
            $table->string('address', 80);
            $table->string('num_tel', 20);
            $table->unsignedinteger('ownerid');
            $table->string('name',255);
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
        Schema::drop('CARWASH');

    }
}