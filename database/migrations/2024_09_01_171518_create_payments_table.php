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
        Schema::dropIfExists('payments');

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('gateway');
            $table->string('reference_id');
            $table->float('amount');
            $table->enum('status', ['pending', 'successful', 'failed'])->default("pending");
            $table->foreignId('course_id')->nullable()->default(null)->constrained('courses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_id')->nullable()->default(null)->constrained('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
