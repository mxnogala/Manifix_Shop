<?php

namespace App\Models;

use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public function products() 
    {
        return $this->hasMany(Product::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}