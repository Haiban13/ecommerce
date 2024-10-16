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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->unsignedBigInteger('image_id')->nullable(); // Add this line
            $table->foreign('image_id')->references('id')->on('images'); // And this line
            $table->unsignedBigInteger('stock_id')->nullable(); // Add this line
            $table->foreign('stock_id')->references('id')->on('stock'); // And this line
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
