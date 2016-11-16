<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rating extends Migration
{

    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('stars');
			$table->string('user_name',100);
			$table->string('user_email_id',100)->unique();
			$table->string('user_review',300);
            $table->timestamps();        });
    }


    public function down()
    {
        Schema::drop('rating');
    }
}
