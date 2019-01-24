<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->date('dateOfBirth');
            $table->string('phone');
            //*khoa_ngoai*//
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            //*khoa_ngoai*//
//            $table->string('passport');
//            $table->string('class');
//            $table->string('address');
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
        Schema::dropIfExists('students');
    }
}
