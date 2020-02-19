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
                <h5>FORM EDIT Banyaknya Perusahaan/Usaha Menengah dan Besar dan Pekerja Dibayar/Tidak Dibayar Menurut Kabupaten/Kota dan Jenis Kelamin</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.bayarpekerja', $edit_bayar_pekerja->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_bayar_pekerja->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_bayar_pekerja->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Banyaknya Perusahaan *</label>
                                <input placeholder="Banyak Perusahaan" name="banyak_perusahaan" id="banyak_perusahaan" value="{{$edit_bayar_pekerja->banyak_perusahaan}}" class="form-control">
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
                                <input placeholder="Laki-laki" name="produksi_pria" id="produksi_pria" value="{{$edit_bayar_pekerja->produksi_pria}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="Perempuan" name="produksi_wanita" id="produksi_wanita" value="{{$edit_bayar_pekerja->produksi_wanita}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jml_produksi" id="jml_produksi" value="{{$edit_bayar_pekerja->jml_produksi}}" class="form-control">
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
                                <input placeholder="Laki-laki" name="lainnya_pria" id="lainnya_pria" value="{{$edit_bayar_pekerja->lainnya_pria}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="Perempuan" name="lainnya_wanita" id="lainnya_wanita" value="{{$edit_bayar_pekerja->lainnya_wanita}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jml_lainnya" id="jml_lainnya" value="{{$edit_bayar_pekerja->jml_lainnya}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Total Tenaga Kerja *</label>
                                <input placeholder="Total" name="total" id="total" value="{{$edit_bayar_pekerja->total}}" class="form-control">
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
