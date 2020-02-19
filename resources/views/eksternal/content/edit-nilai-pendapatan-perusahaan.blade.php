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
                <form class="form-horizontal" action="{{route('update.nilaipendapatanperusahaan', $edit_nilai_pendapatan_perusahaan->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_nilai_pendapatan_perusahaan->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_nilai_pendapatan_perusahaan->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Barang yang dihasilkan *</label>
                                <input placeholder="Rp" name="barang_dihasilkan" id="barang_dihasilkan" value="{{$edit_nilai_pendapatan_perusahaan->barang_dihasilkan}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tenaga Listrik yang dijual *</label>
                                <input placeholder="Rp" name="tenaga_listrik" id="tenaga_listrik" value="{{$edit_nilai_pendapatan_perusahaan->tenaga_listrik}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jasa Industri yang Diterima dari Pihak Lain *</label>
                                <input placeholder="Rp" name="jasa_industri" id="jasa_industri" value="{{$edit_nilai_pendapatan_perusahaan->jasa_industri}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Selisih Nilai Stok Barang Setengah Jadi *</label>
                                <input placeholder="Rp" name="selisih_nilai_stok" id="selisih_nilai_stok" value="{{$edit_nilai_pendapatan_perusahaan->selisih_nilai_stok}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Penerimaan Lain dari Jasa Non Industri *</label>
                                <input placeholder="Rp" name="penerimaan" id="penerimaan" value="{{$edit_nilai_pendapatan_perusahaan->penerimaan}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Rp" name="jumlah" id="jumlah" value="{{$edit_nilai_pendapatan_perusahaan->jumlah}}" class="form-control">
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
