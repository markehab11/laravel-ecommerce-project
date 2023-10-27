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
            $table->string('name');
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->foreignId('categorie_id')->constrained('categories')->nullable()->default('0');
            $table->foreignId('slider_id')->constrained('slider')->nullable()->default('0');
            $table->integer('price');
            $table->integer('descount')->default('0');
            $table->integer('quantity')->default('0');
            $table->timestamps();
            $table->softDeletes();
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
