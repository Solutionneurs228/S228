<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    protected $model = \App\Models\Course::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(4);
        
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraphs(3, true),
            'short_description' => $this->faker->sentence(12),
            'category' => $this->faker->randomElement([
                'infographie', 'photographie', 'bureautique', 
                'developpement', 'cybersecurite', 'photoshop', 'systeme'
            ]),
            'level' => $this->faker->randomElement(['debutant', 'intermediaire', 'avance']),
            'duration_hours' => $this->faker->numberBetween(10, 120),
            'image' => null,
            'objectives' => [],
            'skills_acquired' => [],
            'prerequisites' => [],
            'is_published' => true,
            'requires_approval' => true,
        ];
    }
}