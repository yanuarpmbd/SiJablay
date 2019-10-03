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
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM POK</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('post.pok')}}" method="post">
        @csrf
        <div class="ibox-content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group" id="pd">
                         <label class="col-lg-12 control-label" required>RKO Kegiatan</label>
                        <select class="select2_demo_2 form-control" name="rko_id" id="rko_id">
                            @foreach($dropdown as $d)
                                <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group" id="data_1">
                        <label class="col-lg-12 control-label" required>Bulan</label>
                        <div class="col-lg-12">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="bulan" id="bulan" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Realisasi Fisik s/d Bulan Lalu (Rp) *</label>
                            <input placeholder="Realisasi Fisik s/d Bulan lalu (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_fisik_sebelum" id="realisasi_fisik_sebelum"
                                   class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Realisasi Keuangan s/d Bulan Lalu (Rp) *</label>
                            <input placeholder="Realisasi Keuangan s/d Bulan Lalu (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_keu_sebelum" id="realisasi_keu_sebelum"
                                   class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Realisasi Fisik (Rp) *</label>
                            <input placeholder="Realisasi Fisik (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_fisik" id="realisasi_fisik"
                                   class="form-control" required> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Realisasi Keuangan (Rp) *</label>
                            <input placeholder="Realisasi Keuangan (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_keu" id="realisasi_keu"
                                   class="form-control" required> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-lg-12">
                        <div class="form-group"><label>Keterangan *</label>
                            <input placeholder="Keterangan" name="ket" id="ket"
                                   class="form-control" required> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
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
