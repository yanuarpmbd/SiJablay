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
                <h5>FORM EDIT Penjualan/Pengurangan Barang Modal </h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.penjualan', $edit_penjualan_barang->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_penjualan_barang->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_penjualan_barang->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tanah *</label>
                                <input placeholder="" name="jual_tanah" id="jual_tanah" value="{{$edit_penjualan_barang->jual_tanah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Gedung*</label>
                                <input placeholder="" name="jual_gedung" id="jual_gedung" value="{{$edit_penjualan_barang->jual_gedung}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Mesin dan Perlengkapan *</label>
                                <input placeholder="" name="jual_mesin" id="jual_mesin" value="{{$edit_penjualan_barang->jual_mesin}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Kendaraan *</label>
                                <input placeholder="" name="jual_kendaraan" id="jual_kendaraan" value="{{$edit_penjualan_barang->jual_kendaraan}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Modal Tetap Lainnya *</label>
                                <input placeholder="" name="jual_tetap_lainnya" id="jual_tetap_lainnya" value="{{$edit_penjualan_barang->jual_tetap_lainnya}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="" name="jual_jumlah" id="jual_jumlah" value="{{$edit_penjualan_barang->jumlah}}" class="form-control">
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
