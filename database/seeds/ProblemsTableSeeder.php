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
            'tags' => 1,
            'description' => '',
            'test' => 'test/',
            'level' => 0,
            'practice' => false,
        ]); 
       $table->increments('id');
            $table->string('name');
            $table->string('tag');
            $table->longtext('description');
            $table->string('test');
            $table->unsignedInteger('level');
            $table->boolean('practice');
            $table->timestamps();
    }
}
