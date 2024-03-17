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
            $table->id();
            $table->boolean('status');
            $table->double('amount');
            $table->string('qr');
            $table->string('ready');
            $table->string('quantity');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('product_id');

            $table->timestamps('order_date');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payment');
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
