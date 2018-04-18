<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'	=> 'Shaira Abancio',
        	'IDnum' => '201510558',
        	'password' => Hash::make('password'),
        	'userType'	=> 's',
        	'remember_token'	=> str_random(10),
        ]);
        User::create([
            'name'  => 'Alyssa Lavilla',
            'IDnum' => '201510559',
            'password' => Hash::make('passwords'),
            'userType'  => 's',
            'remember_token'    => str_random(10),
        ]);
        User::create([
            'name'  => 'Joanah Faith Sanz',
            'IDnum' => '201312345',
            'password' => Hash::make('passwordss'),
            'userType'  => 't',
            'remember_token'    => str_random(10),
        ]);
    }
}
