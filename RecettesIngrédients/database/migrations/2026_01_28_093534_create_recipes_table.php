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
        Schema::create('recipes', function (Blueprint $table) {
                $table->id();
                $table->string("title");
                $table->string("description");
                $table->string("steps");
                $table->string("image");
                $table->boolean("isRecipeOfDay");
                $table->timestamps();
                $table->foreignId('users_id')->constrained()->cascadeOnDelete();
                $table->foreignId('categories_id')->constrained()->cascadeOnDelete();
                $table->foreignId('ingredients_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};