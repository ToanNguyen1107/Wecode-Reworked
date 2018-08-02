<?php

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
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
        DB::table('ranks')->insert([
            'name' => 'Gold',
            'elo' => 2000
        ]);    
    }
}
