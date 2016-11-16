<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiumRating extends Migration
{
   
    public function up()
    {
        Schema::create('premium_rating', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('premium_id');
            $table->integer('rating_id');
            $table->timestamps();        });
    }

   
    public function down()
    {
        Schema::drop('premium_rating');
    }
}
