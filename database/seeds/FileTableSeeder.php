<?php

use Illuminate\Database\Seeder;
use App\Files;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Files::create([
            'name'  => 'Shaira.pdf',
        ]);
		
		Files::create([
            'name'  => 'Alyssa.pdf',
        ]);
    }
}
