<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name',100);
            $table->date('event_date_from');
			 $table->date('event_date_to');
			 $table->string('event_hoster',100);
			 $table->string('hoster_phno',100);
			 $table->string('hoster_emailid',100);
			 $table->string('event_featured_image',100);
			 $table->string('event_details',100);
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('events');
    }
}
