<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM KEMITRAAN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('store.kemitraan')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group"><label>Nama Perusahaan *</label>
                                 <input placeholder="Nama Perusahaan" name="nama_perusahaan" id="nama_perusahaan" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Status Badan Usaha *</label>
                                <input placeholder="Status Badan Usaha" name="status_bu" id="status_bu" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Alamat Perusahaan *</label>
                                <input placeholder="Alamat Perusahaan" name="alamat_bu" id="alamat_bu" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Nomor Telepon</label>
                                <input placeholder="Nomor Telepon" name="no_telp" id="no_telp" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Alamat Proyek *</label>
                                <input placeholder="Alamat Proyek" name="alamat_proyek" id="alamat_proyek" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kab/Kota *</label>
                                <input placeholder="Kab/Kota" name="kab_kota" id="kab_kota" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pemilik *</label>
                                <input placeholder="Pemilik" name="pemilik" id="pemilik" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Jenis Produksi</label>
                                <input placeholder="Jenis Produksi" name="jns_produksi" id="jns_produksi" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>KBLI</label>
                                <input placeholder="KBLI" name="kbli" id="kbli" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kapasitas</label>
                                <input placeholder="Kapasitas" name="kapasitas" id="kapasitas" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Investasi</label>
                                <input placeholder="Nilai Investasi" name="nilai_invest" id="nilai_invest" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Omzet</label>
                                <input placeholder="Omzet" name="omzet" id="omzet" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah Pegawai</label>
                                <input placeholder="Jumlah Pegawai" name="jml_pegawai" id="jml_pegawai" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Aspek Kerjasama</label>
                                <input placeholder="Aspek Kerjasama" name="aspek_krjsm" id="aspek_krjsm" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Sektor</label>
                                <select class="form-control" name="sektor" id="sektor">
                                    <option value="Kelautan dan Perikanan">Kelautan dan Perikanan</option>
                                    <option value="Perindustrian">Perindustrian</option>
                                    <option value="Perdagangan">Perdagangan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>MOU</label>
                                <input placeholder="MOU" name="file_mou" id="file_mou" class="form-control" type="file">
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
                                <button class="btn btn-app btn-success" type="submit">Submit</button>
                            </div>
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
