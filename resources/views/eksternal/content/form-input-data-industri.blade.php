<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM BANYAKNYA PERUSAHAAN/USAHA MENENGAH DAN BESAR MENURUT KABUPATEN/KOTA DAN STATUS PENANAMAN MODAL</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.penanaman')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="tahun" name="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>PMDN *</label>
                                <input placeholder="Nlai PMDM" name="pmdn" id="pmdn" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>PPMA *</label>
                                <input placeholder="PMDA" name="ppma" id="ppma" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Non Fasilitas *</label>
                                <input placeholder="Non Fasilitas" name="non_fasilitas" id="non_fasilitas" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jumlah" id="jumlah" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM BANYAKNYA PERUSAHAAN/USAHA MENENGAH DAN BESAR MENURUT KABUPATEN/KOTA DAN KEPEMILIKAN MODAL</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.kepemilikan')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota"  class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Pemerintah Pusat *</label>
                                <input placeholder="Pemerintah Pusat" name="pem_pusat" id="pem_pusat" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pemerintah Daerah *</label>
                                <input placeholder="Pemerintah Daerah" name="pem_daerah" id="pem_daerah" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Swasta Nasional *</label>
                                <input placeholder="Swasta" name="swasta_nas" id="swasta_nas" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Asing *</label>
                                <input placeholder="Asing" name="asing" id="asing" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jumlah" id="jumlah" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM BANYAKNYA PERUSAHAAN/USAHA MENENGAH DAN BESAR DAN PEKERJA DIBAYAR/TIDAK DIBAYAR MENURUT KABUPATEN/KOTA DAN JENIS KELAMIN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.bayarpekerja')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota"  id="kabupeten_kota" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Banyaknya Perusahaan *</label>
                                <input placeholder="Banyak Perusahaan" name="banyak_perusahaan" id="banyak_perusahaan" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Kerja Produksi</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Laki - Laki *</label>
                                <input placeholder="Laki-laki" name="produksi_pria" id="produksi_pria" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="Perempuan" name="produksi_wanita" id="produksi_wanita" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jml_produksi" id="jml_produksi" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Kerja Lainnya</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Laki - Laki *</label>
                                <input placeholder="Laki-laki" name="lainnya_pria" id="lainnya_pria" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="Perempuan" name="lainnya_wanita" id="lainnya_wanita" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jml_lainnya" id="jml_lainnya" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Total Tenaga Kerja *</label>
                                <input placeholder="Total" name="total" id="total" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM PENGELUARAN PERUSAHAAN/USAHA MENENGAH DAN BESAR UNTUK PEKERJA MENURUT KABUPATEN/KOTA DAN JENIS PENGELUARAN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.pengeluaranpekerja')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten Kota" name="kabupaten_kota"  id="kabupaten_kota" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Banyaknya Perusahaan *</label>
                                <input placeholder="Banyak Perusahaan" name="banyak_perusahaan" id="banyak_perusahaan" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Kerja Produksi</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Upah / Gaji *</label>
                                <input placeholder="Upah / Gaji" name="produksi_upah" id="produksi_upah" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Insentif Lainnya *</label>
                                <input placeholder="Insentif" name="produksi_insentif" id="produksi_insentif" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Kerja Lainnya</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Upah / Gaji *</label>
                                <input placeholder="Upah / Gaji" name="lainnya_upah" id="lainnya_upah" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Insentif Lainnya *</label>
                                <input placeholder="Insentif" name="lainnya_insentif" id="lainnya_insentif" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jumlah" id="jumlah" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pengeluaran Per Pekerja *</label>
                                <input placeholder="" name="pengeluaran_pekerja" id="pengeluaran_pekerja" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
       {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>BANYAKNYA BAHAN BAKAR DAN PELUMAS YANG DIGUNAKAN MENURUT KABUPATEN/KOTA DAN JENIS BAHAN BAKAR</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.bahanbakar')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota"  id="kabupaten_kota" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Bensin (Ltr) *</label>
                                <input placeholder="Liter" name="bensin" id="bensin" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Minyak Solar (Ltr) *</label>
                                <input placeholder="Liter" name="solar" id="solar" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Batubara & Briket (Ton) *</label>
                                <input placeholder="Ton" name="batubara" id="batubara" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Gas dari PGN dan Non PGN (M3) *</label>
                                <input placeholder="M3" name="gas" id="gas" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>LPG (Kg) *</label>
                                <input placeholder="Kg" name="lpg" id="lpg" class="form-control">
                            </div>
                        </div>
                    <div class="col-6">
                        <div class="form-group"><label>Pelumas (Ltr) *</label>
                            <input placeholder="" name="pelumas" id="nilai" class="form-control">
                        </div>
                    </div>
            </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM TENAGA LISTRIK YANG DIPRODUKSI SENDIRI, DIBELI, DAN DIJUAL MENURUT KABUPATEN/KOTA</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.listrik')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Produksi Sendiri</label>
                                <input placeholder="Nilai" name="produksi_sendiri" id="produksi_sendiri" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Listrik Dibeli</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Banyaknya (Kwh)</label>
                                <input placeholder="Kwh" name="dibeli_banyaknya" id="dibeli_banyaknya" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nili (Rp) *</label>
                                <input placeholder="Rp" name="dibeli_nilai" id="dibeli_nilai" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Listrik Dijual</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Banyaknya (Kwh) *</label>
                                <input placeholder="Kwh" name="dijual_banyaknya" id="dijual_banyaknya" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai (Rp) *</label>
                                <input placeholder="Rp" name="dijual_nilai" id="dijual_nilai" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM PENGELUARAN PERUSAHAAN/USAHA MENENGAH DAN BESAR MENURUT KABUPATEN/KOTA</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.pengeluaranperusahaan')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Bahan Baku dan Penolong *</label>
                                <input placeholder="Rp" name="bahan_baku" id="bahan_baku" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Bahan Bakar, Tenaga Listrik, dan Gas *</label>
                                <input placeholder="Rp" name="bahan_bakar" id="bahan_bakar" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pengeluaran untuk Jasa Industri *</label>
                                <input placeholder="Rp" name="pengeluaran_jasa" id="pengeluaran_jasa" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Sewa Gedung, Mesin, dan Alat - alat *</label>
                                <input placeholder="Rp" name="sewa" id="sewa" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pengeluaran Lain *</label>
                                <input placeholder="Rp" name="pengeluaran_lain" id="pengeluaran_lain" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Rp" name="jumlah" id="jumlah" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM NILAI PENDAPATAN PERUSAHAAN/USAHA MENENGAH DAN BESAR MENURUT KABUPATEN/KOTA</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.nilaipendapatanperusahaan')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Barang yang dihasilkan *</label>
                                <input placeholder="Rp" name="barang_dihasilkan" id="barang_dihasilkan" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Listrik yang dijual *</label>
                                <input placeholder="Rp" name="tenaga_listrik" id="tenaga_listrik" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jasa Industri yang Diterima dari Pihak Lain *</label>
                                <input placeholder="Rp" name="jasa_industri" id="jasa_industri" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Selisih Nilai Stok Barang Setengah Jadi *</label>
                                <input placeholder="Rp" name="selisih_nilai_stok" id="selisih_nilai_stok" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Penerimaan Lain dari Jasa Non Industri *</label>
                                <input placeholder="Rp" name="penerimaan" id="penerimaan" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Rp" name="jumlah" id="jumlah" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM NILAI TAMBAH PERUSAHAAN/USAHA MENENGAH DAN BESAR MENURUT KABUPATEN/KOTA</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.nilaitambahperusahaan')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Output *</label>
                                <input placeholder="" name="nilai_output" id="nilai_output" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Biaya Input *</label>
                                <input placeholder="" name="biaya_input" id="biaya_input" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Tambah Harga Pasar *</label>
                                <input placeholder="" name="harga_pasar" id="harga_pasar" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pajak Tak Langsung *</label>
                                <input placeholder="" name="pajak_tak_langsung" id="pajak_tak_langsung" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Tambah (Biaya Faktor Produksi) *</label>
                                <input placeholder="" name="biaya_faktor_prduksi" id="biaya_faktor_prduksi" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM SELISIH NILAI STOK AWAL DAN AKHIR TAHUN MENURUT KABUPATEN/KOTA</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.stokawal')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Selisih Nilai Stok Bahan Baku *</label>
                                <input placeholder="" name="bahan_baku" id="bahan_baku" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Selisih Nilai Stok Barang Setengah Jadi *</label>
                                <input placeholder="" name="setengah_jadi" id="setengah_jadi" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>JSelisih Nilai Stok Barang Jadi yang Dihasilkan *</label>
                                <input placeholder="" name="barang_jadi" id="barang_jadi" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah Selisih Nilai Stok *</label>
                                <input placeholder="" name="jumlah_selisih" id="jumlah_selisih" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM PEMBELIAN/PENAMBAHAN DAN PEMBUATAN/PERBAIKAN BARANG MODAL TETAP MENURUT KABUPATEN/KOTA</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.barangmodal')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tanah *</label>
                                <input placeholder="" name="tanah" id="tanah" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Gedung*</label>
                                <input placeholder="" name="gedung" id="gedung" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Mesin dan Perlengkapan *</label>
                                <input placeholder="" name="mesin" id="mesin" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Kendaraan *</label>
                                <input placeholder="" name="kendaraan" id="kendaraan" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Modal Tetap Lainnya *</label>
                                <input placeholder="" name="tetap_lainnya" id="tetap_lainnya" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="" name="jumlah" id="jumlah" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{--@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif--}}
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM PENJUALAN/PENGURANGAN BARANG MODAL</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.penjualan')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota"  class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{\Illuminate\Support\Carbon::today()->format('Y')}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tanah *</label>
                                <input placeholder="" name="jual_tanah" id="jual_tanah" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Gedung*</label>
                                <input placeholder="" name="jual_gedung" id="jual_jual_gedung" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Mesin dan Perlengkapan *</label>
                                <input placeholder="" name="jual_mesin" id="jual_mesin" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Kendaraan *</label>
                                <input placeholder="" name="jual_kendaraan" id="jual_kendaraan" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Modal Tetap Lainnya *</label>
                                <input placeholder="" name="jual_tetap_lainnya" id="jual_tetap_lainnya" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="" name="jual_jumlah" id="jual_jumlah" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
