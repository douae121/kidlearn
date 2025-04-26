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
        Schema::create('math_exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('math_level_id')->constrained()->onDelete('cascade');
            $table->string('type'); // 'counting', 'quiz', 'addition', etc.
            $table->string('question');
            $table->json('options')->nullable();
            $table->integer('correct_answer');
            $table->string('image')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('math_exercises');
    }
};
