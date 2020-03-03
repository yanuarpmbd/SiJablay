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
                <h5>FORM EDIT Pencari Kerja Terdaftar dan Lowongan Kerja Menurut Kabupaten/Kota</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action={{route('update.loker', $edit_loker->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input type="text" placeholder="Kabupaten / Kota" name="kabupaten_kota"  id="kabupaten_kota" value="{{$edit_loker->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input placeholder="Tahun" name="tahun" id="tahun" value="{{$edit_loker->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pencari Kerja Terdaftar</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Laki-laki *</label>
                                <input placeholder="laki" name="pencari_laki" id="pencari_laki" value="{{$edit_loker->pencari_laki}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="Perempuan" name="pencari_perempuan" id="pencari_perempuan" value="{{$edit_loker->pencari_perempuan}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="pencari_jumlah" id="pencari_jumlah" value="{{$edit_loker->pencari_jumlah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Lowonga Kerja Terdaftar</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Laki-laki *</label>
                                <input placeholder="laki" name="lowongan_laki" id="lowongan_laki" value="{{$edit_loker->lowongan_laki}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="Perempuan" name="lowongan_perempuan" id="lowongan_perempuan" value="{{$edit_loker->lowongan_perempuan}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="lowongan_jumlah" id="lowongan_jumlah" value="{{$edit_loker->lowongan_jumlah}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label></label>
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
