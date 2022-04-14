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
        Schema::create('courseowner', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('courseId')->nullable(false);
            $table->bigInteger('userId')->nullable(false);
            $table->timestamps();
            $table->foreign('courseId')->references('id')->on('course');
            $table->foreign('userId')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseowner');
    }
};
