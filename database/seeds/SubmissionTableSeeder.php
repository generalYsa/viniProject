<?php

use Illuminate\Database\Seeder;
use App\Submission;

class SubmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submission::create([
			'activityID' => '1',
			'studentID' => '201510558',
			'score' => '5',
			'fileID' => '1',
		]);
		
		Submission::create([
			'activityID' => '1',
			'studentID' => '201510559',
			'score' => '5',
			'fileID' => '2',
		]);
    }
}
