<?php

namespace App\Exports;

use App\Models\EKSTERNAL\BahanBakarModel;
use App\Models\EKSTERNAL\BayarPekerjaModel;
use App\Models\EKSTERNAL\EksporImporModel;
use App\Models\EKSTERNAL\KepemilikanModalModel;
use App\Models\EKSTERNAL\ListrikModel;
use App\Models\EKSTERNAL\NegaraTujuanModel;
use App\Models\EKSTERNAL\PelabuhanModel;
use App\Models\EKSTERNAL\PengeluaranPekerjaModel;
use App\Models\EKSTERNAL\PengeluaranPerusahaanModel;
use App\Models\EKSTERNAL\StatusPenanamanModalModel;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class  ExporImporExport implements FromView,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        $rek_eksporimpor = EksporImporModel::all();
        //dd($rek_eksporimpor);
        $user = Auth::user()->id;
        $user_name = Auth::user()->name;
        $tahuns = EksporImporModel::groupBy('tahun')->pluck('tahun');
        $volumes = EksporImporModel::groupBy('jenis_volume')->pluck('jenis_volume');
        $komoditis = EksporImporModel::groupBy('jenis_komoditi')->pluck('jenis_komoditi');
        $rek_pelabuhan = PelabuhanModel::all();
        $rek_negara = NegaraTujuanModel::all();
        $rek_statuspenanaman = StatusPenanamanModalModel::all();
        $rek_kepemilikan = KepemilikanModalModel::all();
        $rek_bayarpekerja = BayarPekerjaModel::all();
        $rek_pengeluaranpekerja = PengeluaranPekerjaModel::all();
        $rek_bahanbakar = BahanBakarModel::all();
        $rek_listrik = ListrikModel::all();
        $rek_pengeluaran_perusahaan = PengeluaranPerusahaanModel::all();

        //$rek_eksporimpor = EksporImporModel::whereBetween()->whereYear()->get();

        return view('eksternal.content.nilai-ekspor',compact('rek_eksporimpor',
            'tahuns',
            'volumes',
            'komoditis',
            'user',
            'user_name',
            'rek_pelabuhan',
            'rek_negara',
            'rek_statuspenanaman',
            'rek_kepemilikan',
            'rek_bayarpekerja',
            'rek_pengeluaranpekerja',
            'rek_bahanbakar',
            'rek_listrik',
            'rek_pengeluaran_perusahaan'
        ));

    }

}
