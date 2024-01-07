<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use App\Models\Seller;
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
        $categories_id = ProductCategory::all()->pluck('id');
        $sellers_id = Seller::all()->pluck('id');
        return [
            "name" => fake()->name(),
            "price" => fake()->numberBetween(1000, 100000),
            "category_id" => fake()->randomElement($categories_id),
            "seller_id" => fake()->randomElement($sellers_id),
        ];
    }
}
