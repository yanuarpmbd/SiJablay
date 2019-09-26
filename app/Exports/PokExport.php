<?php

namespace App\Exports;

use App\app\Models\All\PokModel;
use App\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PokExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $user_name = strtoupper(Auth::user()->name);
        $todays = strtoupper(date("F"));
        $today = date("Y-m");
        $query = "CAST(rko_id AS int)ASC";

        return view('all.content.rekap-pok-bidang', [
            'pok' => PokModel::where('bulan', '=', '2019-01')->orderByRaw($query)->get()
        ], compact('user_name', 'todays', 'today'));
    }
}