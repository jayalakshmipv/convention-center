<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BasicCenterDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_center_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('address',250);
			$table->string('location',255);
			$table->string('name_owner',50);
			$table->integer('phone_no',20)->unique();
            $table->integer('mobile_no'20)->unique();
			$table->string('mail_id'30)->unique();
			$table->string('website_address',30)->unique();
			$table->string('maplocation',100);
			$table->string('featured_image',50);
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('basic_center_table');
    }
}
