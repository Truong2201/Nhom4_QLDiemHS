<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();            
            $table->string('tengiaovien');
            $table->boolean('gioitinh');
            $table->date('ngaysinh');
            $table->string('diachi');
            $table->string('gmail');    
            $table->string('sdt');            
            $table->date('ngaytuyendung');
            $table->unsignedBigInteger('sub_id');
            $table->foreign('sub_id')->references('id')->on('subject');
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
        Schema::dropIfExists('teachers');
    }
}
