<div class="ibox float-e-margins">
    <div class="ibox-content">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>

    <div class="ibox-title">
        <h5>FORM EDIT KEMITRAAN</h5>
    </div>

    <form class="form-horizontal" action="{{route('update.mitra', $mitra->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="ibox-content">
            <div class="row">
                <div class="col-12">
                    <div class="form-group"><label>Nama Perusahaan *</label>
                        <input value="{{$mitra->nama_perusahaan}}" placeholder="Nama Perusahaan" name="nama_perusahaan" id="nama_perusahaan" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Status Badan Usaha *</label>
                        <input value="{{$mitra->status_bu}}" placeholder="Status Badan Usaha" name="status_bu" id="status_bu" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Alamat Perusahaan *</label>
                        <input value="{{$mitra->alamat_bu}}" placeholder="Alamat Perusahaan" name="alamat_bu" id="alamat_bu" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Nomor Telepon</label>
                        <input value="{{$mitra->no_telp}}" placeholder="Nomor Telepon" name="no_telp" id="no_telp" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Alamat Proyek *</label>
                        <input value="{{$mitra->alamat_proyek}}" placeholder="Alamat Proyek" name="alamat_proyek" id="alamat_proyek" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Kab/Kota *</label>
                        <input value="{{$mitra->kab_kota}}" placeholder="Kab/Kota" name="kab_kota" id="kab_kota" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Pemilik *</label>
                        <input value="{{$mitra->pemilik}}" placeholder="Pemilik" name="pemilik" id="pemilik" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Jenis Produksi</label>
                        <input value="{{$mitra->jns_produksi}}" placeholder="Jenis Produksi" name="jns_produksi" id="jns_produksi" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>KBLI</label>
                        <input value="{{$mitra->kbli}}" placeholder="KBLI" name="kbli" id="kbli" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Kapasitas</label>
                        <input value="{{$mitra->kapasitas}}" placeholder="Kapasitas" name="kapasitas" id="kapasitas" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Nilai Investasi</label>
                        <input value="{{$mitra->nilai_invest}}" placeholder="Nilai Investasi" name="nilai_invest" id="nilai_invest" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Omzet</label>
                        <input value="{{$mitra->omzet}}" placeholder="Omzet" name="omzet" id="omzet" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Jumlah Pegawai</label>
                        <input value="{{$mitra->jml_pegawai}}" placeholder="Jumlah Pegawai" name="jml_pegawai" id="jml_pegawai" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Aspek Kerjasama</label>
                        <input value="{{$mitra->aspek_krjsm}}" placeholder="Aspek Kerjasama" name="aspek_krjsm" id="aspek_krjsm" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>MOU</label>
                        <input value="{{$mitra->mou}}" placeholder="MOU" name="file_mou" id="file_mou" class="form-control" type="file">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>


            <div class="space-15">

            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" type="submit">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
    </form>
</div>
