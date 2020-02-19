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
                <h5>FORM EDIT Pengeluaran Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.nilaitambahperusahaan', $edit_nilai_tambah_perusahaan->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_nilai_tambah_perusahaan->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_nilai_tambah_perusahaan->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Output *</label>
                                <input placeholder="" name="nilai_output" id="nilai_output" value="{{$edit_nilai_tambah_perusahaan->nilai_output}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Biaya Input *</label>
                                <input placeholder="" name="biaya_input" id="biaya_input" value="{{$edit_nilai_tambah_perusahaan->biaya_input}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Tambah Harga Pasar *</label>
                                <input placeholder="" name="harga_pasar" id="harga_pasar" value="{{$edit_nilai_tambah_perusahaan->harga_pasar}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pajak Tak Langsung *</label>
                                <input placeholder="" name="pajak_tak_langsung" id="pajak_tak_langsung" value="{{$edit_nilai_tambah_perusahaan->pajak_tak_langsung}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai Tambah (Biaya Faktor Produksi) *</label>
                                <input placeholder="" name="biaya_faktor_prduksi" id="biaya_faktor_prduksi" value="{{$edit_nilai_tambah_perusahaan->biaya_faktor_prduksi}}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
