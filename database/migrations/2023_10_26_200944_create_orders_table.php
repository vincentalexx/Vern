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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->foreignId('vehicle_id')->constrained('vehicles')->nullable();
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->string('name');
            $table->string('id_nik');
            $table->string('id_sim');
            $table->string('phone');
            $table->string('email');
            $table->integer('total_price');
            $table->integer('payment_type');
            $table->string('payment_ref')->nullable();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
