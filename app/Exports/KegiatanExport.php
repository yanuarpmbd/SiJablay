<?php

namespace App\Exports;

use App\Models\All\KegiatanModels;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KegiatanExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('all.content.all-keg'[
            'keg' => KegiatanModels::all()
        ]);
    }
}
