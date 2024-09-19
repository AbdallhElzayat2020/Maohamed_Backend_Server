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
        Schema::create('subscribtion_land2s', function (Blueprint $table) {
            $table->id();
            $table->text('title1_after');
            $table->text('title2_after');
            $table->text('title3_after');
            $table->text('title4_after');
            $table->text('title1_before');
            $table->text('title2_before');
            $table->text('title3_before');
            $table->text('title4_before');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribtion_land2s');
    }
};
