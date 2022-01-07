<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('offer_id');
            $table->string('exam_id');
            $table->double('mark');
            $table->double('weight');
            $table->timestamps();
        });
//        Schema::disableForeignKeyConstraints();
//        Schema::table('mark', function($table) {
//            $table->foreign('student_id')->references('student_id')->on('students');
//            $table->foreign('offer_id')->references('offer_id')->on('courseOffer');
//        });
//        Schema::enableForeignKeyConstraints();
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mark');
    }
}
