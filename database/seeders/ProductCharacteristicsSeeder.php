<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $colors = Color::all();
        $sizes = Size::all();


        foreach ($products as $product) {

            foreach ($colors as $color) {

                foreach ($sizes as $size) {

                    $product->colors()->attach($color, ['size_id' => $size->id]);
                }
            }
        }
    }
}
