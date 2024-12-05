<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id')->unique();
            $table->uuid('booking_uuid')->unique();
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->dateTime('booking_date');
            $table->string('status_booking');
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
