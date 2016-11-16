<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aminities extends Migration
{
   
    public function up()
    {
       Schema::create('aminities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facilities',150);
            $table->timestamps();        
			});
    }

    
    public function down()
    {
       Schema::drop('aminities');
    }
}
