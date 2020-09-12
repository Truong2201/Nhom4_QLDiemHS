<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mahs',10)->unique();
            $table->string('hohs');
            $table->string('tenhs');
            $table->string('phone');
            $table->boolean('gioitinh');
            $table->date('ngaysinh');
            $table->text('quequan');
            $table->string('hotencha');
            $table->string('nghenghiepcha');
            $table->string('hotenme');
            $table->string('nghenghiepme');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('class');
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
        Schema::dropIfExists('student');
    }
}
