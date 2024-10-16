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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('addition');
            $table->string('size');
            $table->string('paid');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products'); // And this line
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products'); // And this line
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
