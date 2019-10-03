<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! $message !!}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>EDIT TARGET REALISASI</h5>
        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.targetrealisasi', $target->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group" id="pd">
                                <label class="col-lg-12 control-label">RKO Kegiatan</label>
                                <select class="form-control" name="rko_id" id="rko_id">
                                    @foreach($dropdown as $d)
                                        @if ($d->id == $target->rko_id)
                                            <option selected value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                                        @else
                                            <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="col-lg-12">
                                <div class="form-group"><label>Target Realisasi RKO (%)</label>
                                    <input placeholder="Target Realisasi RKO" name="target" id="target"
                                           class="form-control" value="{{$target->target}}"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group" id="data_3">
                                <label class="col-lg-12 control-label">Bulan</label>
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="bulan" id="bulan" class="form-control"
                                               value="{{$target->bulan}}">
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
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
