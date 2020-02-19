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
                <form class="form-horizontal" action="{{route('update.barangmodal', $edit_barang_modal_tetap->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_barang_modal_tetap->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_barang_modal_tetap->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tanah *</label>
                                <input placeholder="" name="tanah" id="tanah" value="{{$edit_barang_modal_tetap->tanah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Gedung*</label>
                                <input placeholder="" name="gedung" id="gedung" value="{{$edit_barang_modal_tetap->gedung}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Mesin dan Perlengkapan *</label>
                                <input placeholder="" name="mesin" id="mesin" value="{{$edit_barang_modal_tetap->mesin}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Kendaraan *</label>
                                <input placeholder="" name="kendaraan" id="kendaraan" value="{{$edit_barang_modal_tetap->kendaraan}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Modal Tetap Lainnya *</label>
                                <input placeholder="" name="tetap_lainnya" id="tetap_lainnya" value="{{$edit_barang_modal_tetap->tetap_lainnya}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="" name="jumlah" id="jumlah" value="{{$edit_barang_modal_tetap->jumlah}}" class="form-control">
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
