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
                <h5>FORM EDIT Jumlah pencari Pekerja Terdaftar Menurut Tingkat Pendidikan</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.pendidikan', $edit_pendidikan->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="pendidikan_terakhir" id="pendidikan_terakhir" value="{{$edit_pendidikan->pendidikan_terakhir}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_pendidikan->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Laki-laki *</label>
                                <input placeholder="" name="laki" id="laki" value="{{$edit_pendidikan->laki}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Perempuan *</label>
                                <input placeholder="" name="perempuan" id="perempuan" value="{{$edit_pendidikan->perempuan}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="" name="jumlah" id="jumlah" value="{{$edit_pendidikan->jumlah}}" class="form-control">
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
