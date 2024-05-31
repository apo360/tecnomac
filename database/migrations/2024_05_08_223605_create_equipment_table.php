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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('brand', 100);
            $table->string('model', 100);
            $table->integer('years');
            $table->decimal('price', 10, 2);
            $table->string('weights', 20);
            $table->string('rated_power', 20);
            $table->string('standard_bucket_capacity', 20);
            $table->string('standard_bucket_width', 20);
            $table->string('operation_hydraulic_pressure', 20);
            $table->string('maximum_digging_force', 20);
            $table->string('gradeadility', 20);
            $table->string('pressure_to_the_ground', 20);
            $table->string('walking_speed', 20);
            $table->string('maximum_hauling_force', 20);
            $table->string('swing_speed_of_platform', 20);
            $table->text('descriptions');
            $table->string('images', 200)->nullable();
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
