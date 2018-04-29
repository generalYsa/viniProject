<?php

use Illuminate\Database\Seeder;
use App\GradeReq;

class GradeReqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradeReq::create([
            'name'  => 'Assignment',
            'percentage' => '10',
            'classID'  => '1',
			'profID' => '201312345',
        ]);
		
        GradeReq::create([
            'name'  => 'Long Exam',
            'percentage' => '30',
            'classID'  => '1',
			'profID' => '201312345',
        ]);
		
        GradeReq::create([
            'name'  => 'Final Exam',
            'percentage' => '20',
            'classID'  => '1',
			'profID' => '201312345',
        ]);
		
        GradeReq::create([
            'name'  => 'Lab Activity',
            'percentage' => '30',
            'classID'  => '1',
			'profID' => '201312345',
        ]);
		
        GradeReq::create([
            'name'  => 'Problem Set',
            'percentage' => '10',
            'classID'  => '1',
			'profID' => '201312345',
        ]);
    }
}
