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
                <h5>FORM EDIT </h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.nilaitambahperusahaan', $edit_selisih_stok_awal->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_selisih_stok_awal->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_selisih_stok_awal->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Selisih Nilai Stok Bahan Baku *</label>
                                <input placeholder="" name="bahan_baku" id="bahan_baku" value="{{$edit_selisih_stok_awal->bahan_baku}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Selisih Nilai Stok Barang Setengah Jadi *</label>
                                <input placeholder="" name="setengah_jadi" id="setengah_jadi" value="{{$edit_selisih_stok_awal->setengah_jadi}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>JSelisih Nilai Stok Barang Jadi yang Dihasilkan *</label>
                                <input placeholder="" name="barang_jadi" id="barang_jadi" value="{{$edit_selisih_stok_awal->barang_jadi}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah Selisih Nilai Stok *</label>
                                <input placeholder="" name="jumlah_selisih" id="jumlah_selisih" value="{{$edit_selisih_stok_awal->jumlah_selisih}}" class="form-control">
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
