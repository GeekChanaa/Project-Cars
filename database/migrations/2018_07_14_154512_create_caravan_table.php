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
        Schema::create('CARAVAN', function(Blueprint $table) {
            $table->string('ID_CARAVAN', 10);
            $table->string('CARAVAN_CATEGORY', 50);
            
            $table->primary('ID_CARAVAN');
        
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
        Schema::drop('CARAVAN');

    }
}
