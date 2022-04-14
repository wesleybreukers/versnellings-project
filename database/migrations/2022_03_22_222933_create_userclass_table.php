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
        Schema::create('userclass', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->nullable(false);
            $table->bigInteger('classId')->nullable(false);
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('user');
            $table->foreign('classId')->references('id')->on('class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userclass');
    }
};
