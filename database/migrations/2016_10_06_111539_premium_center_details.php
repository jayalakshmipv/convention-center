<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiumCenterDetails extends Migration
{
    
    public function up()
    {
        Schema::create('premium_center_details', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('basic_center_id')->unsigned();
			$table->foreign('basic_center_id')->references('id')->on('basic_center_details');
            $table->string('price_range',100);
            $table->string('seating_capacity',50);
			$table->string('about',255);
			$table->string('video',255);
            $table->timestamps();        });
    }

    public function down()
    {
        Schema::drop('premium_center_details');
    }
}
