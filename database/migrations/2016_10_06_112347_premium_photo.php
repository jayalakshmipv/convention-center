<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiumPhoto extends Migration
{

    public function up()
    {
        Schema::create('premium_photo', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('premium_id');
			$table->integer('photo_id');
			$table->integer('type');
            $table->timestamps();        });
    }

    public function down()
    {
        Schema::drop('premium_photo');
    }
}
