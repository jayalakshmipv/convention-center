<?php

use Illuminate\Database\Seeder;


class SentinelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        Sentinel::registerAndActivate([
        	'email'    =>'admin@admin.com',
        	'password' =>'sentineladmin',
        	'first_name' =>'admin',
        	'last_name'  =>'admin'
        ]);

         $this->command->info('User Seeded!');
    }
}
