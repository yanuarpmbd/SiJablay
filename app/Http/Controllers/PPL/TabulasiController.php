<?php

namespace App\Http\Controllers\PPL;

use App\Exports\TabulasiExport;
use App\Models\PPL\MediaModel;
use App\Models\PPL\RekapPengaduanModels;
use App\Models\PPL\TabulasiModel;
use App\Models\Yanzin\SektorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\View\View;

class TabulasiController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $user_name = Auth::user()->name;
        $bulan = $request->input('bulan');
        $today = date("Y-m");

        $todays = date("F", strtotime($bulan));

        $tab = TabulasiModel::where('bulan', '=', $bulan)
            ->orderByRaw($query)
            /*->where('user_id', '=', $user)*/
            ->get();
        dd($tab);

        return view('ppl.base.tabulasi-rekap-pengaduan', compact('user', 'user_name', 'todays', 'tab', 'today'));
    }

        public function showTabulasi(Request $request)
    {
        $tanggal = Carbon::parse($request->tanggal)->format('m');
        //dd($tanggal);
        $user = Auth::user()->id;
        $jenis_layanan_pengaduan = TabulasiModel::where('jenis_layanan','=','Pengaduan')

            ->whereMonth('tanggal','=',$tanggal)
            ->get();
        $jenis_layanan_informasi = TabulasiModel::where('jenis_layanan','=','Informasi')

            ->whereMonth('tanggal','=',$tanggal)
            ->get();
        $jml_jns_layanan_pengaduan = count($jenis_layanan_pengaduan);
        $jml_jns_layanan_informasi = count($jenis_layanan_informasi);
        $today = date('Y-m');
        //dd($jenis_layanan_pengaduan);
        return view('ppl.base.tabulasi-rekap-pengaduan', compact('today','user','jml_jns_layanan_pengaduan','jml_jns_layanan_informasi','jenis_layanan_informasi'));
    }


    public function countRekap(){

        $rekap = RekapPengaduanModels::all();
        $rekap_informasi = RekapPengaduanModels::where('jenis_layanan', 'Informasi')->get();
        $rekap_pengaduan = RekapPengaduanModels::where('jenis_layanan', 'Pengaduan')->get();

        ////////////////////////////////////////////////////////////////////////
        $groupedInformasi = $rekap_informasi->groupBy(function ($item, $key) {
            return $item['sektor'];
        });
        //dd($grouped);

        $groupCountInformasi = $groupedInformasi->map(function ($item, $key) {
            return collect($item)->count();
        });
        /////////////////////////////////////////////////////////////////////// BY SECTOR - Informasi
        ///
        ///
        /// /////////////////////////////////////////////////////////////////// BY SECTOR - PENGADUAN
        $groupedPengaduan = $rekap_pengaduan->groupBy(function ($item, $key) {
            return $item['sektor'];
        });
        //dd($grouped);

        $groupCountPengaduan = $groupedPengaduan->map(function ($item, $key) {
            return collect($item)->count();
        });

        //////////////////////////////////////////////////////////
        ///
        ///
        /// //////////////////////////////////////////////////////COUNT BY JENIS LAYANAN

        $grouped = $rekap->groupBy(function ($item, $key) {
            return $item['jenis_layanan'];
        });
        //dd($grouped);

        $groupCount = $grouped->map(function ($item, $key) {
            return collect($item)->count();
        });

        ///////////////////////////////////////////////////////////

        //dd($groupCount['Informasi']);

        $hasil_rekap = array(
            'total_aduan_informasi' => $groupCount['Informasi'],
            'sektor_aduan_informasi' => $groupCountInformasi,
            'total_aduan_pengaduan' => $groupCount['Pengaduan'],
            'sektor_aduan_pengaduan' => $groupCountPengaduan,
        );

        return $hasil_rekap;

    }

    public function countRekapMedia()
    {
        $rekap = RekapPengaduanModels::all();
        $rekap_informasi_media = RekapPengaduanModels::where('jenis_layanan', 'Informasi')->get();
        $rekap_pengaduan_media = RekapPengaduanModels::where('jenis_layanan', 'Pengaduan')->get();

        /////////////////////////////////////////////BY MEDIA ////////////////////////

        ////////////////////////////////////////////////////////////////////////

        $rekap_informasi_media = RekapPengaduanModels::where('jenis_layanan', 'Informasi')->get();

        $rekap_pengaduan_media = RekapPengaduanModels::where('jenis_layanan', 'Pengaduan')->get();
        $groupedInformasiMedia = $rekap_informasi_media->groupBy(function ($item, $key) {
            return $item['media'];
        });
        //dd($grouped);

        $groupCountInformasiMedia = $groupedInformasiMedia->map(function ($item, $key) {
            return collect($item)->count();
        });
        /////////////////////////////////////////////////////////////////////// BY SECTOR - Informasi
        ///
        ///
        /// /////////////////////////////////////////////////////////////////// BY SECTOR - PENGADUAN
        $groupedPengaduanMedia = $rekap_pengaduan_media->groupBy(function ($item, $key) {
            return $item['media'];
        });
        //dd($grouped);

        $groupCountPengaduanMedia = $groupedPengaduanMedia->map(function ($item, $key) {
            return collect($item)->count();
        });

        //////////////////////////////////////////////////////////
        ///
        ///
        /// //////////////////////////////////////////////////////COUNT BY JENIS LAYANAN

        $groupeds = $rekap->groupBy(function ($item, $key) {
            return $item['jenis_layanan'];
        });
        //dd($grouped);

        $groupCounts = $groupeds->map(function ($item, $key) {
            return collect($item)->count();
        });

        ///////////////////////////////////////////////////////////

        //dd($groupCount['Informasi']);

        $hasil_rekap_media = array(
            'total_aduan_informasi' => $groupCounts['Informasi'],
            'sektor_aduan_informasi' => $groupCountInformasiMedia,
            'total_aduan_pengaduan' => $groupCounts['Pengaduan'],
            'sektor_aduan_pengaduan' => $groupCountPengaduanMedia,
        );

        return $hasil_rekap_media;

    }




    public function ExportTabulasi()
    {
        return Excel::download(new TabulasiExport, 'Tabulasi.xlsx');
    }



}
