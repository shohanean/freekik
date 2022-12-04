<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Download;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function index()
    {
        $files_count = File::where([
            'status' => 'approved'
        ])->count();
        if($files_count < 9){
            $rand = $files_count;
        }else{
            $rand = 9;
        }
        $files = File::where([
            'status' => 'approved'
        ])->get()->random($rand);
        return view('frontend.index', [
            'categories' => Category::latest()->get(),
            'files' => $files
        ]);
    }
    public function category_details($category_slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $files = File::where([
            'category_id' => $category->id,
            'status' => 'approved',
        ])->get();

        return view('frontend.category_details', compact('category', 'files'));
    }
    public function item_details($file_slug)
    {
        $file = File::where('slug', $file_slug)->firstOrFail();
        $downloads = Download::where('file_id', $file->id)->get();
        $other_files = File::where(['user_id' => $file->user_id, 'status' => 'approved'])->where('slug', '!=',$file_slug)->get();
        return view('frontend.item_details', compact('file', 'other_files', 'downloads'));
    }
    public function download($file_slug)
    {
        $file = File::where('slug', $file_slug)->first();
        if(!Download::where([
            'user_id' => auth()->id(),
            'file_id' => $file->id
        ])->exists()){
            Download::create([
                'user_id' => auth()->id(),
                'file_id' => $file->id,
                'contributor_id' => $file->user_id
            ]);
        }
        return Storage::disk('s3')->download($file->main);
    }
    public function contributor($user_slug)
    {
        $contributor = User::with('file')->where('slug', $user_slug)->firstOrFail();
        return view('frontend.contributor', compact('contributor'));
    }
    public function contact()
    {
        return "contact";
    }
}
