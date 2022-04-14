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
        Schema::create('scheduleassignment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scheduleId')->nullable(false);
            $table->bigInteger('assignmentId')->nullable(false);
            $table->timestamps();
            $table->foreign('scheduleId')->references('id')->on('schedule');
            $table->foreign('assignmentId')->references('id')->on('assignment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduleassignment');
    }
};
