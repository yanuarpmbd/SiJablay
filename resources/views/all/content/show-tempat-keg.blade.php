<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if(session()->has('bad'))
            <div class="alert alert-danger alert-block">
                {{ session()->get('bad') }}
            </div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM TAMBAH TEMPAT KEGIATAN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.tempat-keg')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Tempat Kegiatan *</label>
                                <input class="form-control" name="tempat_keg" id="tempat_keg" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Status Tempat *</label>
                                <select class="form-control" name="status_tempat" id="status_tempat" required>
                                    <option selected></option>
                                    <option value="DPMPTSP Provinsi Jawa Tengah">DPMPTSP Provinsi Jawa Tengah</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
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
