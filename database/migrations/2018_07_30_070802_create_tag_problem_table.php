<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagProblemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_problem', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::table('tag_problem', function (Blueprint $table) {
            $table->unsignedInteger('problem_id');
            $table->foreign('problem_id')->references('id')->on('problems');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_problem');
    }
}
