<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\File;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'categories' => Category::latest()->get()
        ]);
    }
    public function category_details($category_slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $files = File::where('category_id', $category->id)->get();
        return view('frontend.category_details', compact('category', 'files'));
    }
    public function contact()
    {
        return "contact";
    }
}
