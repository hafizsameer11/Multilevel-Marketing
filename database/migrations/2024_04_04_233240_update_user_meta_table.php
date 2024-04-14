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
        Schema::table('user_metas', function (Blueprint $table) {

            $table->bigInteger('total_earning');
            $table->string('image');
            $table->bigInteger('refferal_earning');
            $table->bigInteger('work_earning');
      
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
