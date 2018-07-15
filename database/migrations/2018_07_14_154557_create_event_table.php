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
        Schema::create('EVENT', function(Blueprint $table) {
            $table->string('ID_EVENT', 10);
            $table->date('EVENT_DATE');
            $table->string('DESCRIPTION', 2000);
            $table->string('ADDRESS', 80);
            
            $table->primary('ID_EVENT');
        
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
        Schema::drop('EVENT');

    }
}