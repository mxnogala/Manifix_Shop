<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use DB;

class ProductController extends Controller
{
    public function index(Product $product) 
    {
        echo $product;
    }
    public function show(Category $category)
    {
        $categories = Category::all();
        return view('products', [
            'category'=> $category,
            'categories'=>$categories,
            'products'=>$category->products
        ]);
    }
}
