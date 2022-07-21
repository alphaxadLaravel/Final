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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hod_id')->unsigned()->nullable();
            $table->bigInteger('faculty_id')->unsigned()->nullable();
            $table->string('path');
            $table->string('status')->default('active');
            $table->foreign('hod_id')->references('id')->on('h_o_d_s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('letters');
    }
};
