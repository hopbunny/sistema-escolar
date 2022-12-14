<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_lists', function (Blueprint $table) {
            $table->id();
            $table->boolean('present');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_lists');
    }
};
