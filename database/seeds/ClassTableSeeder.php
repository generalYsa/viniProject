<?php

use Illuminate\Database\Seeder;
use App\Class;

class ClassTableSeeder extends Seeder
{
    public function run()
    {
        Class::create([
        	'name' => 'CMSC 129',
        	'profID' => '4',
        	'code' => '9iqyd',
        ]);
        Class::create([
        	'name' => 'CMSC 126',
        	'profID' => '4',
        	'code' => 'LOP09',
        ]);
        Class::create([
        	'name' => 'CMSC 141',
        	'profID' => '4',
        	'code' => '093RW',
        ]);
        Class::create([
        	'name' => 'CMSC 11',
        	'profID' => '5',
        	'code' => '123ab',
        ]);
    }
}
