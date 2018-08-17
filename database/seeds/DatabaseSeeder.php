<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RanksTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ProblemsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
       
    }
}
