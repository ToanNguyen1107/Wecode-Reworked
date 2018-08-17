<?php

use Illuminate\Database\Seeder;

class ProblemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('problems')->insert([
    		
            'name' => 'test',
            'description' => 'Testing Purpose',
            'folder' => 'test/',
            'level' => 0,
            'practice' => false,
        ]);
    }
}
