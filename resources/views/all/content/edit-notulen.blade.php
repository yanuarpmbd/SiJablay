<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>EDIT NOTULEN</h5>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <form class="form-horizontal" action="{{route('update.notulen', $notulen->id)}}" method="post">
            @csrf
            @method('PATCH')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group" id="data_1"><label class="col-lg-2 control-label">Tanggal</label>
                            <div class="col-lg-12">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="tgl" id="tgl" class="form-control"
                                           value="{{$notulen->tgl}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group"><label>Pukul</label>
                            <div class="col-lg-12">
                                <input value="{{$notulen->pukul}}" placeholder="00:00 - 00:00" name="pukul" id="pukul"
                                       class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Tempat</label>
                                <input value="{{$notulen->tempat}}" placeholder="Tempat" name="tempat" id="tempat"
                                       class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}

                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Acara</label>
                                <input value="{{$notulen->acara}}" placeholder="Acara" name="acara" id="acara"
                                       class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}

                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Peserta</label>
                                <input value="{{$notulen->peserta}}" placeholder="Peserta Rapat" name="peserta" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($errors->has('pemimpin_rpt'))
                        <span class="help-block">
                                <strong>{{ $errors->first('pemimpin_rpt') }}</strong>
                            </span>
                    @endif
                    @if ($errors->has('pengampu_keg'))
                        <span class="help-block">
                                <strong>{{ $errors->first('pengampu_keg') }}</strong>
                            </span>
                    @endif
                    @if ($errors->has('notulis'))
                        <span class="help-block">
                                <strong>{{ $errors->first('notulis') }}</strong>
                            </span>
                    @endif
                    <div class="col-4">
                        <div class="form-group" id="plk">

                            <label class="col-lg-12 control-label">Pemimpin Rapat</label>
                            <div class="col-md-12">

                                <select class="select2_demo_3 form-control" name="pemimpin_rpt" id="pemimpin_rpt"  >
                                    @foreach($nama as $d)
                                        <option value="{{$notulen->pemimpin->id}}">{{$notulen->pemimpin->nama}}</option>
                                        <option value="{{$d->id}}">{{$d->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group" id="plk">

                            <label class="col-lg-12 control-label">Pengampu Kegiatan</label>
                            <div class="col-md-12">

                                <select class="select2_demo_3 form-control" name="pengampu_keg" id="pengampu_keg">
                                    @foreach($nama as $d)
                                        <option value="{{$notulen->pengampu->id}}">{{$notulen->pengampu->nama}}</option>
                                        <option value="{{$d->id}}">{{$d->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group" id="plk">
                            <label class="col-lg-12 control-label">Notulis</label>
                            <div class="col-md-12">
                                <select class="select2_demo_3 form-control" name="notulis" id="notulis">
                                    @foreach($nama as $d)
                                        <option value="{{$notulen->notulis->id}}">{{$notulen->notulis->nama}}</option>
                                        <option value="{{$d->id}}">{{$d->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group"><label class="col-lg-2 control-label">Hasil Rapat</label>
                            <textarea name="article-ckeditor" id="article-ckeditor">{{$notulen->hasil_rapat}}</textarea>
                            <textarea name="hidden-editor" id="hidden-editor" style="display:none;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" type="submit" id="submit-notulen">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
