<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $price = $this->faker->numberBetween(50, 100);
        return [
            'product_name' => $this->faker->name,
            'category_id' => Category::inRandomOrder()->first()->id,
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $price,
            'purchase_price' => $price + 15,
            // 'purchased_date' => now(),
        ];
    }
}
