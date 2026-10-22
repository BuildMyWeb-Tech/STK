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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // First Name
            $table->string('last_name'); // Last Name
            $table->string('phone'); // Phone Number
            $table->decimal('payment', 10, 2)->nullable(); // Payment Amount
            $table->integer('adults')->default(0); // Number of Adults
            $table->integer('full_time_students')->default(0); // Number of Full-time Students
            $table->integer('young_adults')->default(0); // Number of Young Adults (13 to 18)
            $table->integer('kids')->default(0); // Number of Kids Above 5
            $table->integer('young_kids')->default(0); // Number of Young Kids Under 5
            $table->string('food_choice'); // Food Choice (nullable if no choice provided)
            $table->boolean('volunteers')->default(false); // Volunteers (boolean value)
            $table->boolean('photo_video_stk')->default(false); // Photo/Video (STK)
            $table->boolean('photo_video_private')->default(false); // Photo/Video (Private)
            $table->boolean('social_media_sharing')->default(false);
            $table->decimal('total', 10, 2)->default(0.00);
            $table->text('description');
            $table->unsignedBigInteger('upcoming_events_id');
            $table->foreign('upcoming_events_id')->references('id')->on('upcoming_events')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
