<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
    $categories = Category::all();
    return view('index', ['categories' => $categories]);
    }

    public function confirm(Request $request)
    {
        $request->session()->put('selectedCategory', $request->input('content'));
        return view('confirm');
    }
}
