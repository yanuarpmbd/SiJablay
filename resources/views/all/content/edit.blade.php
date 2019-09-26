<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>EDIT KEGIATAN</h5>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <form class="form-horizontal" action="{{route('update.kegiatan', $edit->id)}}" method="post">
            @method('PATCH')
            @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group"><label>Nama Kegiatan</label>
                            <input value="{{$edit->nama_kegiatan}}" name="nama_keg" id="nama_keg" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label>Seksi</label>
                            <input value="{{$edit->seksi}}" name="seksi" id="seksi"
                                   class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group"><label>Program Kerja</label>
                            <input value="{{$edit->program_kerja}}" name="proker" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label>Peserta</label>
                            <input value="{{$edit->peserta}}" name="peserta" id="peserta" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group"><label>Tempat</label>
                            <input value="{{$edit->tempat}}" name="tempat" id="tempat" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group" id="data_1"><label>Tanggal Kegiatan</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="tgl_keg" id="tgl_keg" class="form-control"
                                       value="{{$edit->tanggal}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="input-group clockpicker" data-autoclose="true">
                            <input type="text" name="pukul_mulai" class="form-control" value="{{$edit->pukul_mulai}}" >
                            <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group clockpicker" data-autoclose="true">
                            <input type="text" name="pukul_selesai" class="form-control" value="{{$edit->pukul_selesai}}" >
                            <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
