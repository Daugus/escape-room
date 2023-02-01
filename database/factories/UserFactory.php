<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'role' => $this->faker->randomElement(['profesor', 'alumno']),
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'nickname' => $this->faker->unique()->word(),
            'password' => bcrypt('123'),
            'email' => $this->faker->email(),
            'picture' => 'user.png'
        ];
    }
}
