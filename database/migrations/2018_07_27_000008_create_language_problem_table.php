<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageProblemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_problem', function (Blueprint $table) {
            $table->increments('id');           
            $table->unsignedInteger('memory_limit')->nullable();
            $table->unsignedInteger('time_limit')->nullable();
            $table->timestamps();
        });

        Schema::table('language_problem', function (Blueprint $table) {
            $table->unsignedInteger('problem_id')->nullable();
            $table->foreign('problem_id')->references('id')->on('problems');
            $table->unsignedInteger('language_id')->nullable();
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_problems');
    }
}
