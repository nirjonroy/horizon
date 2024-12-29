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
        Schema::table('seo_settings', function (Blueprint $table) {
            $table->json('keywords')->nullable(); // Add keywords column
        });
    }
    
    public function down()
    {
        Schema::table('seo_settings', function (Blueprint $table) {
            $table->dropColumn('keywords'); // Remove keywords column
        });
    }
};
