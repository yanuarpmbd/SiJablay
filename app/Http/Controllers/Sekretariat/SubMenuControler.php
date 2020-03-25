<?php

namespace App\Http\Controllers\Sekretariat;

use App\Models\Admin\User;
use App\Models\Sekretariat\RkoModel;
use App\Models\Sekretariat\SubKegiatanModel;
use App\Models\Sekretariat\SubMenuKegiatanModels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubMenuControler extends Controller
{
    public function showForm()
    {
        $bidang = User::whereBetween('id', [2, 8])->get();
        $rko_id = RkoModel::all();

        return view('sekretariat.base.sub-kegiatan', compact('bidang','rko_id'));
    }

    public function ngisiSubRKO(Request $request)
    {

        //dd($request->all());
        $array_sub_keg = [
          'nama_keg' => $request->nama_sub_keg,
          'anggaran' => $request->jml_anggaran_sub,
            'tager_sub' => $request->tager_sub
        ];

        //dd($array_sub_keg);
        // $id didapatkan dari hasil memilih RKO

        // versi 1
        /*$sub_rko = new SubMenuKegiatanModels();
        $sub_rko->rko_id = $request->rko_id;
        $sub_rko->nama_kegiatan = $request->nama_kegiatan;
        $sub_rko->jumlah_anggaran = $request->jumlah_anggaran;
        $sub_rko->target_fisik = $request->target_fisik;
        $sub_rko->save();*/

        // versi 2

        foreach ($array_sub_keg as $sub) {
            for ($i=0;$i<count($sub);$i++){
                $sub_rko = new SubMenuKegiatanModels();
                $sub_rko->rko_id = $request->rko_id;
                $sub_rko->nama_sub_keg = $array_sub_keg["nama_keg"][$i];
                $sub_rko->anggaran_sub = $array_sub_keg["anggaran"][$i];
                $sub_rko->tager_sub = $array_sub_keg["tager_sub"][$i];
                $sub_rko->save();
                //dd($sub_rko);
            }

        }
        return redirect()->back()->with('success', 'Data Berhasil Ditambah') ;
    }

    /*public function addSubKeg(Request $request){

        $add_sub_keg = new SubMenuKegiatanModels();
        $add_sub_keg->rko_id = $request->rko_id;
        $add_sub_keg->nama_sub_keg = $request->nama_sub_keg;
        $add_sub_keg->jml_anggaran_sub = $request->jml_anggaran_sub;
        $add_sub_keg->bidang = $request->bidang;
        $add_sub_keg->save();
        return redirect()->back()/*->with('success', 'Data Berhasil Ditambah') ;
    }*/
    public function rekapSubKeg(){
        $rek_rko = RkoModel::all();
        $sub_keg = SubMenuKegiatanModels::all();

        return view('sekretariat.base.rekap-sub-kegiatan', compact('rek_rko','sub_keg'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteSubKeg($id)
    {
        $delete = SubMenuKegiatanModels::findOrFail($id);
        //dd($delete);
        $delete->delete();

        return redirect()->back()/*->with('success', 'Data Berhasil Dihapus')*/ ;
    }


}
