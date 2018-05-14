<?php

use Illuminate\Database\Seeder;
use App\StudentList;

class StudentListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentList::create([
            'classID'  => '1',
            'userID' => '201500001',
            'status'  => 'Active',
        ]);
		
        StudentList::create([
            'classID'  => '1',
            'userID' => '201500002',
            'status'  => 'Active',
        ]);
    }
}
