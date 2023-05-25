<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Download;
use App\Models\Withdraw;
use App\Exports\EarningsExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class EarningsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::where('contributor_id', auth()->id())->latest()->get();
        return view('backend.earning.index', compact('downloads'));
    }

    public function download()
    {
        return Excel::download(new EarningsExport, auth()->user()->name.'.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $withdraws = Withdraw::where('user_id', auth()->id())->latest()->get();
        return view('backend.earning.create', compact('withdraws'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Withdraw::insert([
            'user_id' => auth()->id(),
            'amount' => 96,
            'withdraw_method' => $request->withdraw_method,
            'withdraw_remarks' => $request->withdraw_remarks,
            'created_at' => Carbon::now()
        ]);
        return back();
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
