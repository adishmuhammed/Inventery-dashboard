<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
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
            // product have product_name, sale_price, MRP, category, quantity
            'product_name' => $this->faker->name(),
            'sale_price' => $this->faker->numberBetween(1, 1000),
            'MRP' => $this->faker->numberBetween(1, 1000),
            'category' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
