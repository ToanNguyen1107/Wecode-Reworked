<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('ranks')->insert([
            'name' => 'Silver',
            'elo' => 1000
        ]);
    }
}
