<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'DOB' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement(['m','f']),
            'users_id' => User::factory()->create(['user_type' => 'student'])
        ];
    }
}
