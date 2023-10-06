<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shaurma>
 */
class ShaurmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->image('/var/www/html/public/images', 640, 480, 'food'),
            'rating' => $this->faker->randomFloat(1, 0, 5),
            'weight' => $this->faker->randomDigitNotNull(),
            'price' => $this->faker->randomDigitNotNull(),
        ];
    }
}
