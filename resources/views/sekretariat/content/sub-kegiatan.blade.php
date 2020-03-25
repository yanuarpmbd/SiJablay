<div class="ibox float-e-margins">
    <div class="ibox-content">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>

    <div class="ibox-title">
        <h5>FORM Sub Kegiatan</h5>
    </div>

    <form class="form-horizontal" action="{{route('add.submenu')}}" method="post">
        @csrf

        <div class="ibox-content">
            <div class="row">
                <div class="col-4">
                    <div class="form-group" id="pd">
                        <label class="col-lg-12 control-label">RKO Kegiatan</label>
                        <select class="form-control" name="rko_id" id="rko_id" required>
                            @foreach($dropdown as $d)
                                <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{--<div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Sub Kegiatan</label>
                            <input placeholder="Nama Kegiatan" name="nama_sub_keg" id="nama_sub_keg"
                                   class="form-control"> --}}{{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}{{--
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Jumlah Anggaran</label>
                            <input placeholder="Jumlah Anggaran" data-mask="#.##0" data-mask-reverse="true" name="jml_anggaran_sub" id="jml_anggaran_sub"
                                   class="form-control"> --}}{{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}{{--
                        </div>
                    </div>
                </div>--}}
                {{--<div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Bidang</label>
                            <select class="form-control" name="bidang" id="bidang">
                                @foreach($bidang as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>--}}
            </div>
             <div class="row">
                            <div class="col-12" >
                                <div class="form-group" ><label>Sub Kegiatan</label>
                                    <div class="row" id="input-player-list">
                                        <div class="col-4">
                                            <input placeholder="Sub Kegiatan" name="nama_sub_keg[]" id="nama_sub_keg" class="form-control"
                                                   required>
                                        </div>
                                        <div class="col-4">
                                            <input placeholder="Jumlah Anggaran"  data-mask="#.##0" data-mask-reverse="true" name="jml_anggaran_sub[]" id="jml_anggaran_sub" class="form-control"
                                                   required>
                                        </div>
                                        <div class="col-4">
                                            <input placeholder="Target fisik"  data-mask="#.##0" data-mask-reverse="true" name="tager_sub[]" id="tager_sub" class="form-control"
                                                   required>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="ui-tooltip">
                                        <button type='button' class="btn btn-danger btn-circle float-left"
                                                data-toggle="tooltip" data-placement="bottom" title="Hapus Sub Kegiatan"
                                                id='removeSubKeg'>
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type='button' class="btn btn-info btn-circle float-right" id='addSubKeg'
                                                data-toggle="tooltip" data-placement="bottom" title="Tambah Sub Kegiatan">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-4" id="input-player-lists">
                                <div class="form-group"><label>Jumlah Anggaran</label>
                                    <input placeholder="Jumlah Anggaran"  data-mask="#.##0" data-mask-reverse="true" name="jml_anggaran_sub[]" id="jml_anggaran_sub" class="form-control"
                                           required>
                                </div>
                                <div class="col-lg-12">
                                    <div class="ui-tooltip">
                                        <button type='button' class="btn btn-danger btn-circle float-left"
                                                data-toggle="tooltip" data-placement="bottom" title="Hapus Jumlah Anggaran"
                                                id='removePlayers'>
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type='button' class="btn btn-info btn-circle float-right" id='addPlayers'
                                                data-toggle="tooltip" data-placement="bottom" title="Tambah Jumlah Anggaran">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-0 col-lg-12">
                            <button class="btn btn-sm btn-white" type="submit" id="submit-keg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="space-15">
        </div>
    </form>
</div>
