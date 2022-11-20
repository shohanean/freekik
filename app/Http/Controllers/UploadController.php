<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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
        return $file_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
