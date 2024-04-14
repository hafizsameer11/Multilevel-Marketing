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
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreignId('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('amount')->default(0.0);
            $table->string('nature')->default(null)->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
