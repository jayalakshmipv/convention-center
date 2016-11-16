<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createcategory extends Migration
{
    public function up()
    {
Schema::create('category', function (Blueprint $table) {
 $table->increments('id');
            $table->string('category',255);
             $table->timestamps();       });

    }
    public function down()
    {
    Schema::drop('category');
    }
}
