<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTimeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('day', config('weekdays'));
            $table->text('name');
            $table->dateTime('starting_time');
            $table->dateTime('ending_time');
            $table->text('group');
            $table->text('location');
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
        Schema::dropIfExists('lesson_time');
    }
}
