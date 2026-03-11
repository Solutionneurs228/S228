<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('short_description');
            $table->string('category'); // infographie, photo, bureautique, etc.
            $table->string('level'); // debutant, intermediaire, avance
            $table->integer('duration_hours'); // durée estimée
            $table->string('image')->nullable();
            $table->json('objectives'); // objectifs pédagogiques
            $table->json('skills_acquired'); // compétences acquises
            $table->json('prerequisites')->nullable(); // prérequis
            $table->boolean('is_published')->default(false);
            $table->boolean('requires_approval')->default(true); // validation admin nécessaire
            $table->timestamps();
            
            $table->index(['category', 'level']);
            $table->index('is_published');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};