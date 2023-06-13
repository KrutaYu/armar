<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 9.99,
            'quantity' => 10,
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 19.99,
            'quantity' => 5,
        ]);
    }
}
