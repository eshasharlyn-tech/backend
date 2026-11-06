<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DessertSeeder extends Seeder
{
    public function run(): void
    {
        $cat = [];
        foreach (['Cake', 'Donat', 'Cookies', 'Minuman'] as $name) {
            $cat[$name] = Category::create(['name' => $name])->id;
        }

        $items = [
            ['Cake', 'Strawberry Shortcake', 45000, 12, 4.8],
            ['Cake', 'Red Velvet Slice', 38000, 8, 4.7],
            ['Donat', 'Donat Glaze Pink', 12000, 30, 4.9],
            ['Donat', 'Donat Coklat', 12000, 0, 4.6],
            ['Cookies', 'Choco Chip Cookies', 25000, 20, 4.5],
            ['Cookies', 'Macaron Box', 55000, 6, 4.9],
            ['Minuman', 'Milkshake Strawberry', 28000, 15, 4.4],
            ['Minuman', 'Boba Coklat', 24000, 0, 4.3],
        ];

        foreach ($items as [$c, $name, $price, $stock, $rating]) {
            Product::create([
                'category_id' => $cat[$c],
                'name' => $name,
                'price' => $price,
                'stock' => $stock,
                'rating' => $rating,
            ]);
        }
    }
}