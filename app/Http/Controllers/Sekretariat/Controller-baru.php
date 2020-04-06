<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ngisiRKO(Request $request){

        $rko = new RkoModels();
        $rko->nama_kegiatan = $request->nama_kegiatan;
        $rko->jumlah_anggaran = $request->jumlah_anggaran;
        $rko->target_fisik = $request->target_fisik;
        $rko->user_id = Auth::user()->id;
        $rko->save();

        return "terserah";

    }
    public function ngisiSubRKO(Request $request, $id){

        // $id didapatkan dari hasil memilih RKO

        // versi 1
        $sub_rko = new SubMenuKegiatanModels();
        $sub_rko->rko_id = $id;
        $sub_rko->nama_kegiatan = $request->nama_kegiatan;
        $sub_rko->jumlah_anggaran = $request->jumlah_anggaran;
        $sub_rko->target_fisik = $request->target_fisik;
        $sub_rko->save();

        // versi 2

        foreach ($request->subRko as $sub){
            $sub_rko = new SubMenuKegiatanModels();
            $sub_rko->rko_id = $id;
            $sub_rko->nama_kegiatan = $sub["nama_kegiatan"];
            $sub_rko->jumlah_anggaran = $sub["jumlah_anggaran"];
            $sub_rko->target_fisik = $sub["target_fisik"];
            $sub_rko->save();
        }

        return "terserah";

    }

    public function nampilkePOK(){
        $rkos = RkoModels::all(); // nek nggo nampilke semua bidang
        $rko_bidangs = RkoModels::where('user_id', Auth::user()->id); // salah satu bidang tok

        return view('terserah', compact('rkos'));
    }

    /// tambah relation ning RkoModels
    /// ---------------------MODELS---------------
    /// //RKO MODELS
    /// public function subRko(){
    ///
    /// return $this->hasMany(SubMenuKegiatanModels::class, 'rko_id', 'id')
    ///
    /// }
    ///
    /// //SUBMENU RKOMODELS
    ///
    /// public function rko(){
    /// return $this->belongsTo(RkoModels::class, 'rko_id', 'id')
    ///
    /// }
    ///
    ///
    ///
    /// ---------------------MODELS---------------
    ///
    ///
    ///
    ///
    /// ---------------------VIEW---------------
    /// tampilkan di blade
    /// @isset($rkos)
    ///
    /// @foreach($rkos as $rko)
    ///
    /// manggil nama kegiatan di RKO => $rko->nama_kegiatan
    ///
    ///
    ///   manggil nama sub kegiatan =>
    ///
    ///     @foreach($rko->subRko as $sub)
    ///
    ///     $sub->nama_sub_keg
    ///
    ///     @endforeach
    ///
    ///
    /// @endforeach
    ///
    /// @endisset


}
