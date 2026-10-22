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
        Schema::table('banners', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id')->nullable()->change();
            $table->foreignId('upcoming_id')
                ->nullable() // Make it nullable
                ->constrained('upcoming_events')
                ->onDelete('cascade');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropForeign(['upcoming_id']);

            // Then drop the column
            $table->dropColumn('upcoming_id');
        });
    }
};
