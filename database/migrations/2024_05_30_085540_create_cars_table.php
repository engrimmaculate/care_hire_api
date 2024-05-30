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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_model');
            $table->string('name');
            $table->string('car_type');
            $table->string('seats');
            $table->string('doors');
            $table->string('transmission');
            $table->string('air_condition');
            $table->string('booking_category');
            $table->string('fuel_policy');
            $table->string('insurance');
            $table->string('cancellation');
            $table->string('amendment');
            $table->string('theft_protection');
            $table->string('city');
            $table->string('quantity_available');
            $table->string('day_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
