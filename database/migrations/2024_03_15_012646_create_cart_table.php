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
        
Schema::create('cart', function (Blueprint $table) {
            $table->id('cart_id');
            $table->string('product_id');
            $table->string('user_id');
            $table->unsignedBigInteger('order_id');
            $table->string('quantity');

            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};