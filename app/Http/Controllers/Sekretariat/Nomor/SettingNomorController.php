<?php

namespace App\Http\Controllers\Sekretariat\Nomor;

use App\Models\Sekretariat\ArsipNomor;
use App\Models\Sekretariat\KategoriNomorModel;
use App\Models\Sekretariat\PenggunaanNomorModel;
use App\Models\Sekretariat\SettingNomorModel;
use Carbon\Carbon;
use foo\bar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingNomorController extends Controller
{
    public function showSetting(){

        $kategoris = KategoriNomorModel::all();
        $settings = SettingNomorModel::all();
        $nomors = PenggunaanNomorModel::orderByDesc('updated_at')->get();
        $kodes = ArsipNomor::all();
        $today = date('Y-m-d');
       // $total_nomor = PenggunaanNomorModel::all()->count();
       // dd($total_nomor);
       // dd( $nomor_terakhir = PenggunaanNomorModel::latest('created_at')->limit(1)->get());
       // dd(Carbon::now());
        //dd(date('H:i:s'));

        //dd($nomor_terakhir);
        return view('sekretariat.base.penomoran.setting', compact('kategoris', 'settings', 'nomors', 'kodes', 'today'));
    }

    //////NOMOR//////
    public function addNomor(Request $request){
		
        $tanggal_nomor = Carbon::parse($request->tanggal)->format('Y-m-d').' '.$request->time;
        //dd(Carbon::today()->gt(Carbon::parse($tanggal_nomor)));
        //dd( Carbon::parse($request->tanggal)->format('Y-m-d'));
        $total_nomor = PenggunaanNomorModel::all()->count(); //bug
        $nomor_terakhir = PenggunaanNomorModel::findOrFail($total_nomor); //bug on 0

        if (Carbon::today()->gt(Carbon::parse($tanggal_nomor))){
            $nomor_spare = PenggunaanNomorModel::orderByDesc('created_at')->where('used', 0)->whereDate('tanggal', Carbon::parse($request->tanggal)->format('Y-m-d'))->first();
            //dd($nomor_spare);
            //dd(isset($nomor_spare));
            if (isset($nomor_spare)){
                $nomor_spare->user_id = $request->user_id;
                $nomor_spare->kategori_nomor_id = $request->kategori;
                $nomor_spare->arsip_id = $request->kode;
                $nomor_spare->perihal = $request->perihal;
                $nomor_spare->used = 1;
                //dd($nomor);
                $nomor_spare->update();

                return redirect()->back()->with('success', 'NOMOR ANDA ADALAH' .' '. $nomor_spare->count);
            }
            else{
                return redirect()->back()->with('success', 'BELUM ADA NOMOR DI TANGGAL'.' '.Carbon::parse($request->tanggal)->toFormattedDateString());
            }


        }
        else{
            //dd($nomor_terakhir);
            $nomor = new PenggunaanNomorModel();
            $nomor->user_id = $request->user_id;
            $nomor->kategori_nomor_id = $request->kategori;
            $nomor->arsip_id = $request->kode;
            $nomor->perihal = $request->perihal;
            $nomor->tanggal = $tanggal_nomor;
            $nomor->count = ($nomor_terakhir->count) + 1;
            $nomor->used = 1;
            //dd($nomor);
            $nomor->save();
        }


        return redirect()->back()->with('success', 'berhasil menambahkan nomor surat');
    }

    public function editNomor($id)
    {
        $editkategori = KategoriNomorModel::findOrFail($id);
        //dd($editkategori);
        return view('sekretariat.base.penomoran.edit-kategori', compact('editkategori'));
    }

    public function updateNomor(Request $request, $id)
    {
        $update = KategoriNomorModel::findOrFail($id);
        $update->nama_kategori = $request->editkategori;
        $update->update();

        return redirect()->route('show.setting-nomor')->with('success', 'Kategori Berhasil di rubah');
    }
    //////END-NOMOR///////


    ////////KATEGORI////////
    public function addKategori(Request $request){
        //dd($request->all());
        $kategori = new KategoriNomorModel();
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();

        return redirect()->back()->with('success', 'berhasil menambahkan kategori');
    }

    public function editKategori($id)
    {
        $editkategori = KategoriNomorModel::findOrFail($id);
        //dd($editkategori);
        return view('sekretariat.base.penomoran.edit-kategori', compact('editkategori'));
    }

    public function updateKategori(Request $request, $id)
    {
        $update = KategoriNomorModel::findOrFail($id);
        $update->nama_kategori = $request->editkategori;
        $update->update();

        return redirect()->route('show.setting-nomor')->with('success', 'Kategori Berhasil di rubah');
    }

    public function deleteKategori($id){
        //dd($id);
        $delete = KategoriNomorModel::findOrFail($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus');
    }

    ////////END KATEGORI////////


    ////////SETTING////////

    public function addSetting(Request $request){
        $setting = new SettingNomorModel();
        $setting->spare = $request->setting;
        $setting->save();

        return redirect()->back()->with('success', 'Setting Spare Nomor telah Berhasil dimasukkan');
    }

    public function editSetting($id){
        $editsetting = SettingNomorModel::findOrFail($id);

        return view('sekretariat.base.penomoran.edit-setting', compact('editsetting'));

    }
    public function updateSetting(Request $request, $id){
        $editsetting = SettingNomorModel::findOrFail($id);
        $editsetting->spare = $request->editsetting;
        $editsetting->update();

        return redirect()->route('show.setting-nomor')->with('success', 'Setting Spare Nomor telah Berhasil dimasukkan');

    }

    public function deleteSetting($id){
        $delete = KategoriNomorModel::findOrFail($id);
        $delete->delete();
        return redirect()->back()->with('success', 'Kategori berhasil dihapus');
    }

    ////////END SETTING////////

}
