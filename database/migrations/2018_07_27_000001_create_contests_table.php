<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('start_time');
            $table->dateTime('finish_time');
            $table->dateTime('extra_time');
            $table->text('scoreboard');
            $table->unsignedInteger('total_submits');
            $table->unsignedInteger('minimum_rank');
            $table->unsignedInteger('maximum_rank');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contests');
    }
}
