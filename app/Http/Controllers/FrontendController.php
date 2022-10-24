<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'categories' => Category::where('featured', true)->latest()->get()
        ]);
    }
    public function category_details($category_slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();
        return view('frontend.category_details');
    }
    public function contact()
    {
        return "contact";
    }
}
