<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category){
        return view('category', [
            "title" => $category->name,
            "posts" => $category->posts,
            "category" => $category->name
        ]);
    }
}
