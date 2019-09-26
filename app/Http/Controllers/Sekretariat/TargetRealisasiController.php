<?php

namespace App\Http\Controllers\Sekretariat;

use App\Models\Sekretariat\RkoModel;
use App\Models\Sekretariat\TargetRealisasiModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TargetRealisasiController extends Controller
{
    public  function showForm(){
        $today = date('Y-m');
        $target = TargetRealisasiModel::all();
        $dropdown = RkoModel::all(['nama_kegiatan', 'id']);
        //dd($target);

        return view('sekretariat.base.target-realisasi-rko', compact('today','target','dropdown'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function storeTargetRealisasi(Request $request)
    {
        $this->validate($request, [
            'target' => 'required',
            'bulan' => 'required',
            'rko_id' => 'required',
        ]);

        $target = $request->input('target');
        $bulan = $request->input('bulan');
        $rko_id = $request->input('rko_id');

        $in = new TargetRealisasiModel();
        $in->target = $target;
        $in->bulan = $bulan;
        $in->rko_id = $rko_id;
        //dd($in);
        $in->save();

        return redirect()->route('show.targetrealisasi')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = Auth::user()->id;
        $username = Auth::user()->name;
        $today = date('Y-m');
        $todays = date('F-Y');

        $bulan = $request->input('bulan_input');
        //dd($bulan);

        //$target = TargetRealisasiModel::all();
        $rko = TargetRealisasiModel::where('bulan', '=', $today)->get();
        //($rko);
        return view('sekretariat.base.rekap-rko', compact('user', 'username', 'bulan', 'today', 'rko', 'todays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
