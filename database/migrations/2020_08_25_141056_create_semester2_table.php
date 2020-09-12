<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemester2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('semester2', function (Blueprint $table) {
        //     $table->id();
        //     $table->double('m1')->nullable();;
        //     $table->double('m2')->nullable();;
        //     $table->double('m3')->nullable();;
        //     $table->double('m4')->nullable();;
        //     $table->double('m5')->nullable();;
        //     $table->double('d15p1')->nullable();;
        //     $table->double('d15p2')->nullable();;
        //     $table->double('d15p3')->nullable();;
        //     $table->double('d15p4')->nullable();;
        //     $table->double('d15p5')->nullable();;
        //     $table->double('d1t1')->nullable();;
        //     $table->double('d1t2')->nullable();;
        //     $table->double('d1t3')->nullable();;
        //     $table->double('d1t4')->nullable();;
        //     $table->double('d1t5')->nullable();;
        //     $table->double('tbm')->nullable();;
        //     $table->unsignedBigInteger('student_id');
        //     $table->unsignedBigInteger('subject_id');
        //     $table->unsignedBigInteger('semester_id');
        //     $table->unsignedBigInteger('schoolyear_id');
        //     $table->unsignedBigInteger('class_id');
        //     $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
        //     $table->foreign('subject_id')->references('id')->on('subject')->onDelete('cascade');
        //     $table->foreign('semester_id')->references('id')->on('semester')->onDelete('cascade');
        //     $table->foreign('schoolyear_id')->references('id')->on('schoolyear')->onDelete('cascade');
        //     $table->foreign('class_id')->references('id')->on('class')->onDelete('cascade');
        //     $table->timestamps();
            Schema::create('semester2', function (Blueprint $table) {
                $table->increments('id');
                $table->string('madiem',10)->unique();
                $table->integer('diemcc');
                $table->integer('diemtx');
                $table->integer('diemgk');
                $table->integer('diemck');
                $table->integer('diemtong');
                $table->integer('diemrl')->comment('rèn luyện');
                $table->integer('HeSodiemcc');
                $table->integer('HeSodiemtx');
                $table->integer('HeSodiemgk');
                $table->integer('HeSodiemck');
                $table->integer('student_id')->unsigned();
                $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
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
        Schema::dropIfExists('semester2');
    }
}
