<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('website_config', function (Blueprint $table) {
            $table->id();
            $table->string('contact', 45);
            $table->string('address', 200);
            $table->string('facebook', 45);
            $table->string('linkdin', 45);
            $table->string('twitter', 45);
            $table->string('youtube', 45);
            $table->string('other', 45);
            $table->string('lat', 45);
            $table->string('longi', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_config');
    }
};
