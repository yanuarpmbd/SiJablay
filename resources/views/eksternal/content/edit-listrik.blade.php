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
                <h5>FORM EDIT Tenaga Listrik yang Diproduksi Sendiri, Dibeli, dan Dijual menurut Kabupaten/Kota</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.listrik', $edit_listrik->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_listrik->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_listrik->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Produksi Sendiri</label>
                                <input placeholder="Nilai" name="produksi_sendiri" id="produksi_sendiri" value="{{$edit_listrik->produksi_sendiri}}" class="form-control">
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
                                <input placeholder="Kwh" name="dibeli_banyaknya" id="dibeli_banyaknya" value="{{$edit_listrik->dibeli_banyaknya}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nili (Rp) *</label>
                                <input placeholder="Rp" name="dibeli_nilai" id="dibeli_nilai" value="{{$edit_listrik->dibeli_nilai}}" class="form-control">
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
                                <input placeholder="Kwh" name="dijual_banyaknya" id="dijual_banyaknya" value="{{$edit_listrik->dijual_banyaknya}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai (Rp) *</label>
                                <input placeholder="Rp" name="dijual_nilai" id="dijual_nilai" value="{{$edit_listrik->dijual_nilai}}" class="form-control">
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
