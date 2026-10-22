<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('past_events', function (Blueprint $table) {
        $table->boolean('feedback_enabled')->default(false);
        $table->date('feedback_close_date')->nullable();
    });
}

public function down()
{
    Schema::table('past_events', function (Blueprint $table) {
        $table->dropColumn(['feedback_enabled', 'feedback_close_date']);
    });
}

};
