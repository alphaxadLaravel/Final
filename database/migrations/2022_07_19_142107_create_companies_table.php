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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brellah_id')->unsigned()->nullable();
            $table->bigInteger('hr_id')->unsigned()->nullable();
            $table->foreign('brellah_id')->references('id')->on('brellahs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hr_id')->references('id')->on('h_r_s')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('companies');
    }
};
