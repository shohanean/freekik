<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Timeline;
use App\Models\File;
use Carbon\Carbon;


class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::with('category')->where([
            'user_id' => auth()->id()
        ])->latest()->get();

        return view('backend.upload.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.upload.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required'
        ]);

        $file_id = File::insertGetId($request->except('_token') + [
            'user_id' => auth()->id(),
            'created_at' => Carbon::now()
        ]);

        $thumbnail_uploaded_path = $request->file('thumbnail')->storeAs(
            'files/'.$file_id,
            "thumbnail-".time()."-".$request->file('thumbnail')->hashName(),
            's3'
        );

        $main_uploaded_path = $request->file('main')->storeAs(
            'files/'.$file_id,
            "main-".time()."-".$request->file('main')->hashName(),
            's3'
        );

        File::find($file_id)->update([
            'thumbnail' => $thumbnail_uploaded_path,
            'main' => $main_uploaded_path
        ]);

        Timeline::create([
            'file_id' => $file_id,
            'alert' => 'info',
            'user_id' => auth()->id(),
            'details' => 'sent to review'
        ]);

        return $file_id;
    }
    public function file_for_review()
    {
        $files = File::with(['category', 'user'])->latest()->get();
        return view('backend.reviewer.file_for_review', compact('files'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.upload.show', [
            'file' => File::with(['category', 'user'])->findOrFail($id),
            'timelines' => Timeline::with('user')->where('file_id', $id)->latest()->get()
        ]);
    }
    public function file_for_review_details($id)
    {
        return view('backend.reviewer.file_for_review_details', [
            'file' => File::with(['category', 'user'])->findOrFail($id),
            'timelines' => Timeline::with('user')->where('file_id', $id)->latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->status == 'approved'){
            $alert = 'success';
        }
        else if($request->status == 'soft rejected'){
            $alert = 'warning';
        }
        else{
            $alert = 'danger';
        }

        File::find($id)->update([
            'status' => $request->status
        ]);
        Timeline::insert([
            'file_id' => $id,
            'details' => $request->status,
            'comment' => $request->comment,
            'alert' => $alert,
            'user_id' => auth()->id(),
            'created_at' => Carbon::now()
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Storage::disk('s3')->deleteDirectory('files/'.$id);
        File::find($id)->delete();
        return redirect('upload');
    }
}
