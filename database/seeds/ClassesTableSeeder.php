<?php

use Illuminate\Database\Seeder;
use App\Classes;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
            'name'  => 'CMSC 129',
            'profID' => '201312345',
            'code'  => '11111',
        ]);
    }
}
