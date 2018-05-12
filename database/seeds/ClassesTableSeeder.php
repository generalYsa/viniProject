<?php

use Illuminate\Database\Seeder;
use App\Classes;

<<<<<<< HEAD
class ClassesTableSeeder extends Seeder
=======
class ClassTableSeeder extends Seeder
>>>>>>> 23e05b0cddc6d09cd20c1e31e7fd802b3b40751a
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
<<<<<<< HEAD
        	'name'	=> 'CMSC 129',
        	'profNum' => '7',
        	'code'	=> '9iqyd',
=======
            'name'  => 'CMSC 129',
            'profID' => '201312345',
            'code'  => '11111',
>>>>>>> 23e05b0cddc6d09cd20c1e31e7fd802b3b40751a
        ]);
    }
}
