<div class="ibox float-e-margins">
    <div class="ibox-content">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>


    <form class="form-horizontal" action="{{route('tambah.pegawai')}}" method="post">
        @csrf

        <div class="ibox-content">
            <div class="row">
                <div class="col-12">
                    <div class="form-group"><label>Nama</label>
                        <input placeholder="Nama Pegawai" name="nama_peg" id="nama_peg" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>TTL</label>
                        <input placeholder="Tempat Tanggal Lahir" name="ttl" id="ttl"
                               class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Alamat</label>
                        <input placeholder="Alamat" name="alamat" id="alamat" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label class="col-lg-2 control-label">Unit Kerja</label>
                        <div class="col-lg-12"><input placeholder="Unit Kerja" name="unit_kerja" id="unit_kerja" class="form-control"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label class="col-lg-2 control-label">NIP</label>
                        <div class="col-lg-12"><input placeholder="NIP" name="nip" id="nip" class="form-control"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label class="col-lg-2 control-label">Golongan</label>
                        <div class="col-lg-12"><input placeholder="Golongan" name="gol" id="gol" class="form-control"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label class="col-lg-2 control-label">Jabatan</label>
                        <div class="col-lg-12"><input placeholder="Jabatan" name="jabatan" id="jabatan" class="form-control"></div>
                    </div>
                </div>
            </div>




        </div>
        <div class="space-15">

        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
