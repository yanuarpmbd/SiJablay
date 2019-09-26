<?php

namespace App\Http\Controllers\PPL;

use App\Exports\PengaduanExport;
use App\Models\PPL\RekapPengaduanModels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class RekapPengaduanController extends Controller
{
    public function gabung(){
        $rek_pengaduan = RekapPengaduanModels::all();
        $user_name = Auth::user()->name;

        return view('ppl.base.gabung', compact('rek_pengaduan', 'user_name'));
    }

    public function index(){
        $pengaduan = RekapPengaduanModels::all();

        return view('ppl.base.form-rekap-pengaduan', compact('pengaduan'));
    }

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'tanggal' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'media' => 'required',
            'jenis_layanan' => 'required',
            'sektor' => 'required',
            'rincian_aduan' => 'required',
            'penyelesaian' => 'required',
        ]);

        $tanggal = $request->input('tanggal');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $media = $request->input('media');
        $jenis_layanan = $request->input('jenis_layanan');
        $no_telp = $request->input('no_telp');
        $sektor = $request->input('sektor');
        $wa_email = $request->input('wa_email');
        $rincian_aduan = $request->input('rincian_aduan');
        $penyelesaian = $request->input('penyelesaian');

        $post = new RekapPengaduanModels();
        $post->tanggal = $tanggal;
        $post->nama = $nama;
        $post->jenis_kelamin = $jenis_kelamin;
        $post->media = $media;
        $post->jenis_layanan = $jenis_layanan;
        $post->no_telp = $no_telp;
        $post->sektor = $sektor;
        $post->wa_email = $wa_email;
        $post->rincian_aduan = $rincian_aduan;
        $post->penyelesaian = $penyelesaian;
        //dd($post);
        $post->save();

        return redirect()->back()->with('success', 'Data Berhasil DiInput');
    }

    public function rekap(){
        $rek_pengaduan = RekapPengaduanModels::all();
        $user_name = Auth::user()->name;
        //dd($user_name);

        return view('ppl.base.rekap-pengaduan', compact('rek_pengaduan', 'user_name'));
    }

    public function edit($id){
        $rek_pengaduan = RekapPengaduanModels::findOrFail($id);
        //dd($rek_pengaduan);
        return view('ppl.base.edit-pengaduan', compact('rek_pengaduan'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'tanggal' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'media' => 'required',
            'jenis_layanan' => 'required',
            'sektor' => 'required',
            'rincian_aduan' => 'required',
            'penyelesaian' => 'required',
        ]);

        $tanggal = $request->input('tanggal');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $media = $request->input('media');
        $jenis_layanan = $request->input('jenis_layanan');
        $no_telp = $request->input('no_telp');
        $sektor = $request->input('sektor');
        $wa_email = $request->input('wa_email');
        $rincian_aduan = $request->input('rincian_aduan');
        $penyelesaian = $request->input('penyelesaian');

        $post = RekapPengaduanModels::findOrFail($id);
        $post->tanggal = $tanggal;
        $post->nama = $nama;
        $post->jenis_kelamin = $jenis_kelamin;
        $post->media = $media;
        $post->jenis_layanan = $jenis_layanan;
        $post->no_telp = $no_telp;
        $post->sektor = $sektor;
        $post->wa_email = $wa_email;
        $post->rincian_aduan = $rincian_aduan;
        $post->penyelesaian = $penyelesaian;
        //dd($post);
        $post->update();

        return redirect()->route('gabung.pengaduan')->with('success', 'Data berhasil diubah');
    }

    public function delete($id){
        $delete = RekapPengaduanModels::findOrFail($id);
        //dd($delete);
        $delete->delete();

        return redirect()->route('gabung.pengaduan')->with('success', 'Data berhasil dihapus');
    }

    public function export(){
        return Excel::download(new PengaduanExport(), 'Rekap Pengaduan.xlsx');
    }
}
