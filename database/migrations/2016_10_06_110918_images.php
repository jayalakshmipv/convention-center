<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Images extends Migration
{
    
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id',20);
            $table->string('name',50);
            $table->timestamps();        });
    }

    
    public function down()
    {
        Schema::drop('photos');
    }
}
