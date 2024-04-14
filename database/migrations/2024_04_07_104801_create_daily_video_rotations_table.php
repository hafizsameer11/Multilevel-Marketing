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
        Schema::create('daily_video_rotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->unsignedBigInteger('start_video_id')->nullable();
            $table->unsignedBigInteger('last_video_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_video_rotations');
    }
};
