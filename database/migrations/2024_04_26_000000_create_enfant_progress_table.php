<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enfant_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('parent_models')->onDelete('cascade');
            $table->string('nom_enfant');
            $table->string('activite');
            $table->integer('score');
            $table->timestamp('date_completion');
            $table->text('commentaires')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enfant_progress');
    }
}; 