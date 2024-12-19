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
        Schema::create('student_information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->string('have_other_nationalities-')->default('no');
            $table->string('other_nationality')->nullable();
            $table->string('course_and_degree')->nullable();
            $table->string('subject_of_interest')->nullable();
            $table->string('course_name')->nullable();
            $table->string('preferred_session')->nullable();
            $table->text('comments')->nullable();
            $table->text('last_education')->nullable();
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
        Schema::dropIfExists('student_information');
    }
};
