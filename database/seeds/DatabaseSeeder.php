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
        $this->call(
			ActivityTableSeeder::class,
			FileTableSeeder::class,
			GradeReqTableSeeder::class,
			StudentListTableSeeder::class,
			SubmissionTableSeeder::class,
			ClassesTableSeeder::class,
            UsersTableSeeder::class
        );
    }
}
