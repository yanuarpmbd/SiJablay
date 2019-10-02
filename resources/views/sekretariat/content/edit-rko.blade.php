<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>EDIT RKO</h5>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <form class="form-horizontal" action="{{route('update.rko', $rko->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-4">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Nama Kegiatan</label>
                                <input placeholder="Nama Kegiatan" name="nama_kegiatan" id="nama_kegiatan"
                                       class="form-control" value="{{$rko->nama_kegiatan}}"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Jumlah Anggaran</label>
                                <input placeholder="Jumlah Anggaran" data-mask="#.##0" data-mask-reverse="true" name="jml_anggaran" id="jml_anggaran"
                                       class="form-control" value="{{$rko->jml_anggaran}}"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Bidang</label>
                                <select class="form-control" name="bidang" id="bidang">
                                    @foreach($bidang as $b)
                                        @if ($b->id == $rko->bidang)
                                            <option selected value="{{$b->id}}">{{$b->name}}</option>
                                        @else
                                            <option value="{{$b->id}}">{{$b->name}}</option>
                                        @endif
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
            </form>
        </div>
    </div>
</div>
