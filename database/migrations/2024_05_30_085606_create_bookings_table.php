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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained();
            $table->string('firstname');
            $table->string('surname');
            $table->string('age')->nullable();
            $table->string('email');
            $table->string('title');
            $table->string('pickup_location');
            $table->date('pickup_date');
            $table->string('destination');
            $table->date('return_date');
            $table->string('dropoff_location');
            $table->string('day_rate');
            $table->string('total');
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
