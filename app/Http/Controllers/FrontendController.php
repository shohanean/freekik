<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Download;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    public function index()
    {
        $files_count = File::where([
            'status' => 'approved'
        ])->count();
        if ($files_count < 9) {
            $rand = $files_count;
        } else {
            $rand = 9;
        }
        $files = File::where([
            'status' => 'approved'
        ])->get()->random($rand);

        if (request()->cookie('suggest')) {
            $suggest_category_id = File::where('slug', request()->cookie('suggest'))->first()->category_id;
            $suggested_files = File::where([
                'category_id' => $suggest_category_id,
                'status' => 'approved'
            ])->take(6)->get();
        } else {
            $suggested_files = collect();
        }

        if(request()->cookie('recent_views')){
            $get_recent_view_files = explode('#', request()->cookie('recent_views'));
            $recent_view_files = File::whereIn('id', $get_recent_view_files)->get();
        } else {
            $recent_view_files = collect();
        }
        return view('frontend.index', [
            'categories' => Category::latest()->get(),
            'files' => $files,
            'file_count' => File::where(['status' => 'approved'])->count(),
            'suggested_files' => $suggested_files,
            'recent_view_files' => $recent_view_files,
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
    public function item_details($file_slug, Request $request)
    {
        $file = File::where('slug', $file_slug)->firstOrFail();
        if (request()->cookie('recent_views')) {
            $get_recent_views_id = request()->cookie('recent_views');
            $get_recent_views_ids = explode('#', $get_recent_views_id);
            array_unshift($get_recent_views_ids, $file->id);
            $get_unique_recent_views_ids = array_unique($get_recent_views_ids);
            $get_slice_recent_views_ids = array_slice($get_unique_recent_views_ids, 0, 6);
            $recent_views_ids = join('#', $get_slice_recent_views_ids);
            Cookie::queue(cookie('recent_views', $recent_views_ids, 43800));
        } else {
            $recent_views_id = [$file->id];
            $recent_views_ids = join('#', $recent_views_id);
            Cookie::queue(cookie('recent_views', $recent_views_ids, 43800));
        }
        $downloads = Download::where('file_id', $file->id)->get();
        $other_files = File::where(['user_id' => $file->user_id, 'status' => 'approved'])->where('slug', '!=', $file_slug)->get();
        Cookie::queue(cookie('suggest', $file_slug, 43800));
        return view('frontend.item_details', compact('file', 'other_files', 'downloads'));
    }
    public function download($file_slug)
    {
        $file = File::where('slug', $file_slug)->first();
        if (!Download::where([
            'user_id' => auth()->id(),
            'file_id' => $file->id
        ])->exists()) {
            Download::create([
                'user_id' => auth()->id(),
                'file_id' => $file->id,
                'contributor_id' => $file->user_id
            ]);
        }
        $temporaryUrl = Storage::disk('s3')->temporaryUrl(
            $file->main,
            now()->addMinutes(5)
        );
        return redirect($temporaryUrl);
    }
    public function contributor($user_slug)
    {
        $contributor = User::with(["file" => function ($q) {
            $q->where('status','approved');
        }])->where('slug', $user_slug)->firstOrFail();
        return view('frontend.contributor', compact('contributor'));
    }
    public function contact()
    {
        return "contact";
    }
}
