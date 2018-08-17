<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'student_id' => '0',
            'name' => 'Ghost',
            'email' => 'wecode@wecode',
            'password' => bcrypt('wecode'),
            'type' => 2,
            'elo' => 1,
            'banned' => 0,
        ]);
        DB::table('users')->insert([
            'student_id' => '1',
            'name' => 'Peasant',
            'email' => 'Peanut@wecode',
            'password' => bcrypt('wecode'),
            'type' => 1,
            'elo' => 1,
            'banned' => 0,
        ]);
        DB::table('users')->insert([
            'student_id' => '2',
            'name' => 'Noob',
            'email' => 'Noob@wecode',
            'password' => bcrypt('wecode'),
            'type' => 0,
            'elo' => 1,
            'banned' => 0,
        ]);
    }
}
