<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('malop',10)->unique();
            $table->string('tenlop');
            $table->integer('siso');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('schoolyear_id');
            $table->unsignedBigInteger('teachers_id');
            $table->foreign('grade_id')->references('id')->on('grade');
            $table->foreign('schoolyear_id')->references('id')->on('schoolyear');
            $table->foreign('teachers_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('class');
    }
}
