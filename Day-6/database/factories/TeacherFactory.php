<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'users_id' => User::factory()->create(['user_type' => 'teacher'])->id,// Create a new user automatically OR use existing one
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
