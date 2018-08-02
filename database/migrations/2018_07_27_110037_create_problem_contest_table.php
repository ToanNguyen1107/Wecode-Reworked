<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_contest', function (Blueprint $table) {
            $table->increments('id');           
            $table->timestamps();
        });

        Schema::table('problem_contest', function (Blueprint $table) {
            $table->unsignedInteger('contest_id')->nullable();
            $table->foreign('contest_id')->references('id')->on('contests');
            $table->unsignedInteger('problem_id')->nullable();
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
        Schema::dropIfExists('problem_contest');
    }
}
