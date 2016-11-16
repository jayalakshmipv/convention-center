<?php

use Illuminate\Database\Seeder;


class SentinelUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  DB::table('role_users')->delete();

    	  $admin = Sentinel::findByCredentials(['login'	=> 'admin@admin.com']);

    	  $adminRole = Sentinel::findRoleByName('Admin');

    	  // Assign the roles to the users

    	  $adminRole->users()->attach($admin);

    	  $this->command->info('users assigned to roles seeded!');

    }
}    	  

