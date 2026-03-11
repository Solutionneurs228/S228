// database/migrations/2024_01_16_000002_create_questions_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->text('question_text');
            $table->enum('type', ['single_choice', 'multiple_choice', 'true_false', 'text']);
            $table->json('options')->nullable(); // Pour QCM: [{text: "...", is_correct: true}, ...]
            $table->text('correct_answer')->nullable(); // Pour texte libre ou réponse correcte
            $table->text('explanation')->nullable(); // Explication après réponse
            $table->integer('points')->default(1);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
