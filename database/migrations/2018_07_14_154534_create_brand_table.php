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
        Schema::create('BRAND', function(Blueprint $table) {
            $table->string('ID_BRAND', 10);
            $table->string('BRAND_NAME', 255);
            $table->string('BRAND_DESCRIPTION', 2000);
            $table->binary('BRAND_LOGO');
            $table->string('BRAND_WEBSITE', 510);
            $table->string('HEADQUARTERS', 255);
            $table->date('FOUNDATION_DATE');
            $table->string('FOUNER', 255);
            $table->integer('NUMBER_EMPLOYEES');
            $table->string('BRAND_PRODUCTS', 255);
            
            $table->primary('ID_BRAND');
        
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
        Schema::drop('BRAND');

    }
}