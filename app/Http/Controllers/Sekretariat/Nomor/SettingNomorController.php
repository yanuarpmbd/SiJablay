<?php

namespace App\Http\Controllers\Sekretariat\Nomor;

use App\Models\Sekretariat\KategoriNomorModel;
use App\Models\Sekretariat\SettingNomorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingNomorController extends Controller
{
    public function showSetting(){

        $kategoris = KategoriNomorModel::all();
        $settings = SettingNomorModel::all();

        return view('sekretariat.base.penomoran.setting', compact('kategoris', 'settings'));
    }

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
