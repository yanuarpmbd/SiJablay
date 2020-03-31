<?php

namespace App\Http\Controllers\Sekretariat;

use App\Models\Admin\User;
use App\Models\All\SubRkoModel;
use App\Models\All\TargetSubRkoModel;
use App\Models\Sekretariat\RkoModel;
use App\Models\Sekretariat\SubKegiatanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RkoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRKO(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'jml_anggaran' => 'required',
            'bidang' => 'required',
        ]);

        $nama_kegiatan = $request->input('nama_kegiatan');
        $jml_anggarans = $request->input('jml_anggaran');
        $jml_anggaran = str_replace('.','', $jml_anggarans);
        $bidang = $request->input('bidang');

        $in = new RkoModel();
        $in->nama_kegiatan = $nama_kegiatan;
        $in->jml_anggaran = $jml_anggaran;
        $in->bidang = $bidang;
        //dd($in);
        $in->save();

        //dd($value);
      /*  $rko = RkoModel::all();
        foreach ($rko as $item){
            $item->id;
        }
        $rko_id = $item->id;
        foreach ($request->input('sub_keg') as $key => $item){
            $jml_anggaran_subs = $request->jml_anggaran_sub[$key];
            $jml_anggaran_sub = str_replace('.','',$jml_anggaran_subs);
            SubKegiatanModel::create([
                'nama_sub_keg' => $item,
                'jml_anggaran_sub' => $jml_anggaran_sub,
                'rko_id' => $rko_id,
            ]);
        }*/

        /*return redirect()->route('show.rko')->with('success', 'Data Berhasil Ditambahkan');*/
    }


    public function ngisiRKO(Request $request){

        //dd($request->all());

        if (isset($request->tahun)){
            $tahun = $request->tahun;
        }
        else{
            $tahun = Carbon::now()->format('Y');
        }


        $rko = new SubRkoModel();
        $rko->rko_id = $request->kegiatan;
        $rko->nama_kegiatan = $request->nama_sub_rko;
        $rko->jumlah_anggaran = $request->jml_anggaran_sub_rko;
        $rko->user_id = Auth::user()->id;
        $rko->save();

        $this_year = Carbon::now();

        for ($i=1;$i<=count($request->target_sub_rko);$i++){
            $rko_target = new TargetSubRkoModel();
            $rko_target->target = $request->target_sub_rko[$i];
            if ($i<=9){
                $rko_target->bulan = Carbon::createFromFormat('Y-m-d', $tahun . '-0' . $i.'-1');
            }
            else{
                $rko_target->bulan = Carbon::createFromFormat('Y-m-d', $tahun . '-' . $i.'-1');
            }
            $rko_target->sub_rko_id = $rko->id;
            //dd($rko_target);
            $rko_target->save();
        }

        return redirect()->route('gabung.pok')->with('success', 'Data SUB KEGIATAN Berhasil Ditambahkan');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        $bidang = User::whereBetween('id', [2, 8])->get();
        return view('sekretariat.base.rko', compact('bidang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rko = RkoModel::findOrFail($id);
        $bidang = User::whereBetween('id', [2, 8])->get();

        return view('sekretariat.base.edit-rko', compact('rko', 'bidang'));
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
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'jml_anggaran' => 'required',
            'bidang' => 'required',
        ]);

        $nama_kegiatan = $request->input('nama_kegiatan');
        $jml_anggarans = $request->input('jml_anggaran');
        $jml_anggaran = str_replace('.','', $jml_anggarans);
        $bidang = $request->input('bidang');

        $update = RkoModel::findOrFail($id);
        $update->nama_kegiatan = $nama_kegiatan;
        $update->jml_anggaran = $jml_anggaran;
        $update->bidang = $bidang;
        //($update);
        $update->update();

        return redirect()->route('get.all')->with('success', 'Data RKO berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = RkoModel::findOrFail($id);
        //dd($delete);
        $delete->delete();

        return redirect()->route('get.all')->with('success', 'Data RKO berhasil diubah');
    }

    public function rekapRKO(){
        $rek_rko = RkoModel::all();

        return view('sekretariat.base.rek-rko', compact('rek_rko'));
    }


}
