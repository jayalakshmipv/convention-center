<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiumAminities extends Migration
{
   
    public function up()
    {
        Schema::create('premium_aminities', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('premium_id');
            $table->integer('aminities_id');
            $table->timestamps();        });
    }

    
    public function down()
    {
        Schema:drop('premium_aminities');
    }
}
