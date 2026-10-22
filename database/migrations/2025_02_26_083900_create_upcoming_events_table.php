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
        Schema::create('upcoming_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');  // Event name
            $table->string('venue');  // Venue
            $table->date('event_date');  // Event date
            $table->time('start_time');  // Event time
            $table->time('end_time');  // Event time
            $table->decimal('adults_price', 8, 2);  // Price for adults
            $table->decimal('students_price', 8, 2);  // Price for full-time students
            $table->decimal('young_adults_price', 8, 2);  // Price for young adults
            $table->decimal('kids_price', 8, 2);  // Price for kids
            $table->json('food_choice')->nullable();  // Food choice (Veg or Non-Veg)
            $table->text('event_description')->nullable();  // Event description
            $table->string('event_image')->nullable();  // Image path for event image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upcoming_events');
    }
};
