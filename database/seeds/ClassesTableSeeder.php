<?php

use Illuminate\Database\Seeder;
use App\Classes;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
        	'name'	=> 'CMSC 129',
        	'profNum' => '7',
        	'code'	=> '9iqyd',
        ]);
    }
}
