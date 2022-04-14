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
        Schema::create('rolepermission', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('roleId')->nullable(false);
            $table->enum('permission', ['USER_CREATE', 'USER_DELETE', 'USER_EDIT'])->nullable(false);
            $table->timestamps();
            $table->foreign('roleId')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolepermission');
    }
};
