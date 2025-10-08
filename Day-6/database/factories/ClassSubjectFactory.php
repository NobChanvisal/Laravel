<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classes;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClassSubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'class_id' => Classes::inRandomOrder()->first()->id ?? Classes::factory(),
            'subject_id' => Subject::inRandomOrder()->first()->id ?? Subject::factory(),
        ];
    }
}
