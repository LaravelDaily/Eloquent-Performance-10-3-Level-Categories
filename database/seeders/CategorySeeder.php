<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Toys']);
        Category::create(['name' => 'Clothes']);
        Category::create(['name' => 'LEGO', 'category_id' => 1]);
        Category::create(['name' => 'Barbie', 'category_id' => 1]);
        Category::create(['name' => 'LEGO Friends', 'category_id' => 3]);
        Category::create(['name' => 'LEGO Architecture', 'category_id' => 3]);
        Category::create(['name' => 'Barbie Dolls', 'category_id' => 4]);
        Category::create(['name' => 'Barbie Accessories', 'category_id' => 4]);
        Category::create(['name' => 'Dresses', 'category_id' => 2]);
        Category::create(['name' => 'Frozen Movie', 'category_id' => 9]);
        Category::create(['name' => 'Minnie Mouse', 'category_id' => 9]);
        Category::create(['name' => 'Accessories', 'category_id' => 2]);
        Category::create(['name' => 'Bracelets', 'category_id' => 12]);
        Category::create(['name' => 'Rings', 'category_id' => 12]);
    }
}
