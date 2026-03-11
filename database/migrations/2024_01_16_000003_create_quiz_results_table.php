// database/migrations/2024_01_16_000003_create_quiz_results_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->integer('score'); // Score obtenu
            $table->integer('max_score'); // Score maximum possible
            $table->integer('percentage'); // Pourcentage
            $table->boolean('is_passed'); // Réussi ou non
            $table->integer('attempt_number'); // Numéro de tentative
            $table->json('answers')->nullable(); // Réponses données [{question_id: 1, answer: "..."}, ...]
            $table->timestamp('started_at');
            $table->timestamp('completed_at')->nullable();
            $table->integer('time_spent_seconds')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_results');
    }
};