<?php

/* 
	Use the following commands to fix ReflectionException:
	
	composer dump-autoload
	php artisan db:seed
*/

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		User::create([
			'name' => 'Shaira Abancio',
			'IDnum' => '201510558',
			'password' => Hash::make('password'),
			'userType' => 's',
			'remember_token' => str_random(10),
		]);
		
		User::create([
			'name' => 'Alyssa Lavilla',
			'IDnum' => '201510559',
			'password' => Hash::make('passwords'),
			'userType' => 's',
			'remember_token' => str_random(10),
		]);
		
		User::create([
			'name' => 'Joanah Faith Sanz',
			'IDnum' => '201312345',
			'password' => Hash::make('passwordss'),
			'userType' => 's',
			'remember_token' => str_random(10),
		]);
	}
}