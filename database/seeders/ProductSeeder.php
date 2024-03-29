<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Tạo 10 bản ghi Product sử dụng ProductFactory
        Product::factory()->count(100)->create();
    }
}