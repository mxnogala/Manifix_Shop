<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {

        $category = DB::table('category as c')
        ->join('subcategory as s', 'c.id', 's.category_id')
        ->select(DB::raw('c.name as category, c.id as id, count(*) as amount'))
        ->groupBy('category', 'id')
        ->get();
        echo $category;
        $subcategory = DB::table('subcategory')->get();

        return view('welcome', ['category' => $category, 'subcategory' => $subcategory]);
        // $category = DB::select("select * from category join subcategory on category.id = subcategory.category_id");
        
        
        // $category = DB::table('category as c')
        // ->join('subcategory as s', 'c.id', 's.category_id')
        // ->select('c.name as category', 'c.id as catId', 's.name as subcategory', 's.category_id as subId')
        // ->get();
        // return view('welcome', ['category' => $category]);
        // echo $data;
        
    }
}
