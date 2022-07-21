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
      
        Schema::create('camp_supervisions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('host_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->string('status')->default('active');
            $table->foreign('host_id')->references('id')->on('hosts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('camp_supervisions');
    }
};
