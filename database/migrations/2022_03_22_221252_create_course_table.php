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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable(false);
            $table->string('shortName', 5)->nullable(false);
            $table->integer('semester')->nullable(false);
            $table->integer('period')->nullable(false);
            $table->year('cohort')->nullable(false);
            $table->bigInteger('scheduleId')->nullable(false);
            $table->timestamps();
            $table->foreign('scheduleId')->references('id')->on('schedule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
};
