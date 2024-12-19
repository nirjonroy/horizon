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
        Schema::create('where_to_studies', function (Blueprint $table) {
            $table->id();
            $table->string('slider1')->nullable();
            $table->string('slider2')->nullable();
            $table->string('slider3')->nullable();
            $table->text('short_description')->nullable();
            $table->text('rated')->nullable();
            $table->text('global_network')->nullable();
            $table->text('award')->nullable();
            $table->text('rank')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('faq_question_1')->nullable();
            $table->string('faq_question_2')->nullable();
            $table->string('faq_question_3')->nullable();
            $table->string('faq_question_4')->nullable();
            $table->string('faq_question_5')->nullable();
            $table->text('faq_answer_1')->nullable();
            $table->text('faq_answer_2')->nullable();
            $table->text('faq_answer_3')->nullable();
            $table->text('faq_answer_4')->nullable();
            $table->text('faq_answer_5')->nullable();
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
        Schema::dropIfExists('where_to_studies');
    }
};
