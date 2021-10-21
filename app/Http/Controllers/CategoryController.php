<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with(['subcategories.subcategories' => function($query) {
                $query->withCount('products');
            }])
            ->get();

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load('subcategories.subcategories');

        $subcategoryIDs = [$category->id];
        foreach ($category->subcategories as $subcategory) {
            $subcategoryIDs[] = $subcategory->id;
            foreach ($subcategory->subcategories as $subsubcategory) {
                $subcategoryIDs[] = $subsubcategory->id;
            }
        }

        $products = Product::whereHas('categories', function($query) use ($subcategoryIDs) {
            $query->whereIn('categories.id', $subcategoryIDs);
        })->get();

        return view('categories.show', compact('category', 'products'));
    }
}
