<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatebrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BRAND', function(Blueprint $table) {
            $table->string('brand_name', 255);
            $table->string('brand_description', 2000);
            $table->binary('brand_logo');
            $table->string('brand_website', 510);
            $table->string('headquarters', 255);
            $table->date('foundation_date');
            $table->string('founer', 255);
            $table->integer('number_employees');
            $table->string('brand_products', 255);
        $table->increments('id');
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