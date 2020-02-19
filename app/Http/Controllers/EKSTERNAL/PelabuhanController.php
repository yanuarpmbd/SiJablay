<?php

namespace App\Http\Controllers\EKSTERNAL;

use App\Models\EKSTERNAL\PelabuhanModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelabuhanController extends Controller
{
    public function formPelabuhan(){

    }

    public function addPelabuhan(Request $request)
    {
        //dd($request->tahun);
        $add_pelabuhan = new PelabuhanModel();
        $add_pelabuhan->tahun = $request->tahun;
        $add_pelabuhan->jenis_volume = $request->jenis_volume;
        $add_pelabuhan->pelabuhan_muat = $request->pelabuhan_muat;
        $add_pelabuhan->volume = $request->volume;
        $add_pelabuhan->nilai = $request->nilai;
        $add_pelabuhan->save();
        return redirect()->back()/*->with('success', 'Data Berhasil Ditambah')*/ ;
    }

    public function editPelabuhan($id)
    {
        $edit_pelabuhan = PelabuhanModel::findOrFail($id);
        return view('eksternal.base.edit-pelabuhan', compact('edit_pelabuhan'));
    }

    public function updatePelabuhan(Request $request, $id)
    {
        $update_pelabuhan = PelabuhanModel::findOrFail($id);
        $update_pelabuhan->tahun = $request->tahun;
        $update_pelabuhan->jenis_volume = $request->jenis_volume;
        $update_pelabuhan->pelabuhan_muat = $request->pelabuhan_muat;
        $update_pelabuhan->volume = $request->volume;
        $update_pelabuhan->nilai = $request->nilai;
        $update_pelabuhan->update();

        return redirect()->route('show.eksternal')->with('success', 'Data berhasil diubah');
    }

    public function deletePelabuhan($id)
    {
        $delete_pelabuhan = PelabuhanModel::findOrFail($id);
        $delete_pelabuhan->delete();
        return redirect()->back()->with('success', 'Data Berhasil di Hapus');
    }
}
