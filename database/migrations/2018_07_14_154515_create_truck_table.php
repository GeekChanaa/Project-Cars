<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRUCK', function(Blueprint $table) {
            $table->string('ID_TRUCK', 10);
            $table->string('TRUCK_CATEGORY', 50);
            
            $table->primary('ID_TRUCK');
        
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
        Schema::drop('TRUCK');

    }
}