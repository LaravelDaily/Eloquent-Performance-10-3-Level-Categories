<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [5,6,7,8,10,11,13,14];

        Product::factory(1000)->create()->each(function($product) use ($categories) {
            $product->categories()->attach($categories[array_rand($categories)]);
        });
    }
}
