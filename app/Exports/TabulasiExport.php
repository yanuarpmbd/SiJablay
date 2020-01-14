<?php

namespace App\Exports;

use App\Models\PPL\RekapPengaduanModels;
use App\Models\Yanzin\SektorModel;
use Maatwebsite\Excel\Concerns\FromCollection;

//use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\PPL\TabulasiModel;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class TabulasiExport implements FromView,ShouldAutoSize
{
//    /**
//    * @return \Illuminate\Support\Collection
//    */
//    public function collection()


       public function view(): View
       {
           $user_name = Auth::user()->name;
           $jenis_layanan_pengaduan = TabulasiModel::where('jenis_layanan','=','Pengaduan')->get();
           $jml_jns_layanan_pengaduan = count($jenis_layanan_pengaduan);
           $jenis_layanan_informasi = TabulasiModel::where('jenis_layanan','=','Informasi')->get();
           $jml_jns_layanan_informasi = count($jenis_layanan_informasi);
            $tabulasi = TabulasiModel::all();
            $sektors = SektorModel::all('nama_sektor');
            $rek_pengaduan = RekapPengaduanModels::all();
           return view('ppl.content.tabulasi-rekap-pengaduan',
               compact('tabulasi','user_name','jml_jns_layanan_pengaduan','jml_jns_layanan_informasi','sektors','rek_pengaduan'));

//           return TabulasiModel::all();

       }

}



