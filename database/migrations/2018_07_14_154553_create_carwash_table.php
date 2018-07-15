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
        Schema::create('CARWASH', function(Blueprint $table) {
            $table->string('ID_CARWASH', 10);
            $table->string('ADDRESS', 80);
            $table->string('NUM_TEL', 20);
            $table->string('OWNERID', 10);
            
            $table->primary('ID_CARWASH');
        
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