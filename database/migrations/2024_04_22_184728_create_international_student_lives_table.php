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
        Schema::create('international_student_lives', function (Blueprint $table) {
            $table->id();
            $table->string('hero_banner');
            $table->text('hero_banner_text');
            $table->text('Sporting_event_text');
            $table->string('Sporting_event_image');
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
        Schema::dropIfExists('international_student_lives');
    }
};
