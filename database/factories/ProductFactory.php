<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(20,50),
            'description' => $this->faker->randomElement([
                "Test description 1",
                "Test description 2",
                "Test description 3",
                "Test description 4"
            ])
        ];
    }
}
