<?php

namespace App\Http\Controllers;

use App\Models\Category;

class PageController extends Controller
{
    public function index() {
        $category = Category::where('slug', 'magical')->firstOrFail();

        return redirect()->route('categories.show', $category);
    }

    public function logIn() {
        return view('logIn');
    }

}   

