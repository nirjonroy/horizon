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
        Schema::create('online_fees', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('degree_id')->nullable();
            $table->string('type')->nullable();
            $table->string('program')->nullable();
            $table->string('total_fee')->nullable();
            $table->string('yearly')->nullable();
            $table->string('duration')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('online_fees');
    }
};
