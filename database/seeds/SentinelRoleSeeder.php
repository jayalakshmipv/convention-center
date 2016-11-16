<?php

use Illuminate\Database\Seeder;

class SentinelRoleSeeder extends Seeder
{
    public function run()
    {
    	  DB::table('roles')->delete();

    	  Sentinel::getRoleRepository()->createModel()->create([
    	  		'name'	=>	'Admin',
    	  		'slug'	=>	'admin',
    	  	]);

    	  $this->command->info('Roles seeded!');

    }
}    
