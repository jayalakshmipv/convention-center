<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiumPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premium_photo', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('premium_id');
			$table->integer('photo_id');
			$table->integer('type');
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('premium_photo');
    }
}
