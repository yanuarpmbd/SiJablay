<?php

namespace App\Http\Controllers\All;

use App\Models\All\KabKotaModels;
use App\Models\PPL\RekapPengaduanModels;
use App\Models\Yanzin\JenisIzinModel;
use App\Models\Yanzin\RekapPerizinanModel;
use App\Models\Yanzin\SOPPelayananModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promosi\KemitraanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataBidangController extends Controller
{
    public function gabungbidang(Request $request){
        $mitra = KemitraanModel::all();
        $user = Auth::user()->id;
        $user_name = Auth::user()->name;
        $soppelayanan = SOPPelayananModel::all();
        $today = date("Y-m");
        $dropdown = JenisIzinModel::all();
        $rekap_sop = SOPPelayananModel::all();
        $todays = date("F", strtotime($today));
        $rekap = RekapPerizinanModel::all();
        $kabkota = $request->input('kab_kota');
        $kabkotas = KabKotaModels::all();
        $rek_oss = DB::table('oss_models')
            ->where('daerah', 'LIKE', '%'.$kabkota.'%')
            ->get();
        $kab_kotas = DB::table('pma_invest_models')->groupBy('kab_kota')->get();
        $pma_pmdns = DB::table('pma_invest_models')->groupBy('pma_pmdn')->get();
        $sektors = DB::table('pma_invest_models')->groupBy('sektor')->get();
        $kab_kota = $request->input('kab_kota');
        $pma_pmdn = $request->input('pma_pmdn');
        $sektor = $request->input('sektor');
        if ($pma_pmdn == 'all'){
            $pma_invest = DB::table('pma_invest_models')
                ->where('kab_kota', 'LIKE', '%'.$kabkota.'%')
                ->where('sektor', 'LIKE', '%'.$sektor.'%')
                ->get();
        }
        elseif ($kabkota == 'all'){
            $pma_invest = DB::table('pma_invest_models')
                ->Where('pma_pmdn', 'LIKE', '%'.$pma_pmdn.'%')
                ->Where('sektor', 'LIKE', '%'.$sektor.'%')
                ->get();
        }
        elseif ($sektor == 'all'){
            $pma_invest = DB::table('pma_invest_models')
                ->where('pma_pmdn', 'LIKE', '%'.$pma_pmdn.'%')
                ->where('kab_kota', 'LIKE', '%'.$kabkota.'%')
                ->get();
        }
        elseif (($kab_kota == 'all') and ($sektor == 'all')){
            $pma_invest = DB::table('pma_invest_models')
                ->where('pma_pmdn', 'LIKE', '%'.$pma_pmdn.'%')
                ->get();
        }
        elseif (($pma_pmdn == 'all') and ($kabkota == 'all') and ($sektor == 'all')){
            $pma_invest = DB::table('pma_invest_models')->get();
        }
        else{
            $pma_invest = DB::table('pma_invest_models')
                ->where('kab_kota', 'LIKE', '%'.$kabkota.'%')
                ->Where('pma_pmdn', 'LIKE', '%'.$pma_pmdn.'%')
                ->Where('sektor', 'LIKE', '%'.$sektor.'%')
                ->get();
        }
        $rek_pengaduan = RekapPengaduanModels::all();


        return view('all.base.gabung-bidang', compact('mitra','kabkota', 'kabkotas', 'rek_oss', 'user', 'user_name', 'soppelayanan', 'today', 'todays', 'dropdown', 'rekap_sop', 'rekap', 'pma_invest', 'kab_kotas', 'pma_pmdns', 'pma_pmdn', 'sektors', 'kab_kota', 'rek_pengaduan'));
    }
}
