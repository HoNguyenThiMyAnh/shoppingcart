<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Product;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->words(3, true),
            'product_description' => $this->faker->paragraph,
            'photo' => $this->faker->imageUrl(), // Example, you may need to adjust this depending on your needs
            'price' => $this->faker->randomFloat(2, 1, 1000), // Random price between 1 and 1000 with 2 decimal places
            // other fields if any
        ];
    }
}