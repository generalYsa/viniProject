<?php

use Illuminate\Database\Seeder;
use App\Studentlist;

class StudentListSeeder extends Seeder
{
    public function run()
    {
        Studentlist::create([
        	'classID' => '1',
        	'userID' => '2',
        	'status' => 'active',
        ]);
        Studentlist::create([
        	'classID' => '2',
        	'userID' => '3',
        	'status' => 'active',
        ]);
    }
}
