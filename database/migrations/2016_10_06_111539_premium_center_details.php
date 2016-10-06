<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiumCenterDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premium_center_details', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('basic_center_id',11);
            $table->string('price_range',100);
            $table->string('seating_capacity',50);
			$table->string('about',255);
			$table->string('video',255);
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('premium_center_details');
    }
}
