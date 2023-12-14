<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(100, true),
            'price' => $this->faker->numberBetween(100, 15000),
            'image' => $this->faker->imageUrl(),
            'active' => $this->faker->boolean(80),
        ];
    }
}
