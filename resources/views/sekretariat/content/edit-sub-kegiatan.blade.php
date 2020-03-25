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
        <h5>EDIT Sub Kegiatan</h5>
    </div>

    <form class="form-horizontal" action="{{route('edit.submenu')}}" method="post">
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
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Sub Kegiatan</label>
                            <input placeholder="Nama Kegiatan" name="nama_sub_keg" id="nama_sub_keg"
                                   class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Jumlah Anggaran</label>
                            <input placeholder="Jumlah Anggaran" data-mask="#.##0" data-mask-reverse="true" name="jml_anggaran_sub" id="jml_anggaran_sub"
                                   class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Bidang</label>
                            <select class="form-control" name="bidang" id="bidang">
                                @foreach($bidang as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-0 col-lg-12">
                            <button class="btn btn-sm btn-white" type="submit" id="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="space-15">
        </div>
    </form>
</div>
