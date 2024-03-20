<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => fake()->name(),
            'user_surname' => fake()->lastName(),
            'product_name' => fake()->sentence(3),
            'product_content' => fake()->sentence(5),
            'product_kilogram' => rand(1, 100),
            'product_description' => fake()->sentence(15),
        ];
    }
}
