<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Http\Controllers\ProductController;


Auth::routes();

Route::get('/', function() {
    return view('index', [
        'categories'=>Category::all()
    ]);
});
    
Route::get('/products/{category:slug}', [ProductController::class, 'show']);

ROute::get('product/{product:slug}', [ProductController::class, 'index']);

