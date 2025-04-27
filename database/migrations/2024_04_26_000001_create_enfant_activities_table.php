<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enfant_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('parent_models')->onDelete('cascade');
            $table->string('nom_enfant');
            $table->string('type_activite'); // Lecture, Mathématiques, etc.
            $table->string('niveau'); // Niveau atteint
            $table->integer('score')->default(0);
            $table->timestamp('derniere_activite')->nullable();
            $table->integer('temps_passe')->default(0); // en minutes
            $table->integer('exercices_completes')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enfant_activities');
    }
}; 