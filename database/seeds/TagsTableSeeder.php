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
    	DB::table('tags')->insert(['name' => 'Sort']);
    	DB::table('tags')->insert(['name' => 'Implementation']);
    	DB::table('tags')->insert(['name' => 'Graph']);
        DB::table('tags')->insert(['name' => 'BinarySearch']);
    }
}
