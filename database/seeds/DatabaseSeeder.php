<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call(ActivityTableSeeder::class);
		$this->call(FileTableSeeder::class);
		$this->call(GradeReqTableSeeder::class);
		$this->call(StudentListTableSeeder::class);
		$this->call(SubmissionTableSeeder::class);
		$this->call(ClassesTableSeeder::class);
		$this->call(UsersTableSeeder::class);
    }
}
