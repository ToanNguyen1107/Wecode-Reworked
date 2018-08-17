<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'C++',
            'compiling' => '',
            'memory_limit' => 1024,
            'time_limit' => 1000
        ]);
        DB::table('languages')->insert([
            'name' => 'Python',
            'compiling' => '',
            'memory_limit' => 1024,
            'time_limit' => 3000
        ]);
    }
}
