<?php

namespace App\Exports;

use App\Models\Download;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EarningsExport implements FromView
{
    public function view(): View
    {
        return view('backend.exports.earnings', [
            'downloads' => Download::where('contributor_id', auth()->id())->get()
        ]);
    }
}
