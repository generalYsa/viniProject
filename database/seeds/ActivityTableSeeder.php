<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'name'  => 'Assignment 1',
            'description' => 'This is our first assignment.',
            'score' => 100,
            'classID'  => '1',
			'author' => '201312345',
			'gradeReqID' => '1',
			'deadline' => '2018-06-28 09:29:36',
        ]);
		
		Activity::create([
            'name'  => 'Problem Set 1',
            'description' => 'This is our first problem set.',
            'score' => 100,
            'classID'  => '1',
			'author' => '201312345',
			'gradeReqID' => '4',
			'deadline' => '2018-06-28 09:29:36',
        ]);
		
		Activity::create([
            'name'  => 'Lab Activity 1',
            'description' => 'This is our first lab activity.',
            'score' => 100,
            'classID'  => '1',
			'author' => '201312345',
			'gradeReqID' => '3',
			'deadline' => '2018-06-28 09:29:36',
        ]);
    }
}
