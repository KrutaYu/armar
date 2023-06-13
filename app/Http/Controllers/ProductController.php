<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCharacteristics;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($productId, $color)
    {
//        $product = Product::findOrFail($productId);
//
//        $selectedColor = Color::where('name', $color)->firstOrFail();
//
//        $sizes = $product
//            ->sizes()
//            ->whereHas('colors', function ($query) use ($selectedColor) {$query
//                ->where('colors.id', $selectedColor->id);
//        })
//            ->get();
//        $product = Product::findOrFail($id);
//        $colors = Product::distinct('color')->pluck('color');

        $product = Product::findOrFail($productId);
//        $product = ProductCharacteristics::findOrFail($productId);
//        $char = ProductCharacteristics:: where('product_id', $productId)->get();
//        dd($char);
//        $colorProduct = $product->colors()->where('name', $color)->firstOrFail();


//
        $selectedColor = Color::where('name', $color)->firstOrFail();
//
//        $sizes = $product->sizes()->whereHas('colors', function ($query) use ($selectedColor) {
//            $query->where('colors.id', $selectedColor->id);
//        })->get();
        $sizes = Size::whereHas('products', function ($query) use ($product, $selectedColor) {
            $query->where('product_characteristics.product_id', $product->id)
                ->whereHas('colors', function ($query) use ($selectedColor) {
                    $query->where('colors.id', $selectedColor->id);
                });
        })->get();
//        dd($sizes);

        return view('product.show', compact('product', 'selectedColor', 'sizes'));
    }
}
