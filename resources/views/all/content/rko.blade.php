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
                <h5>FORM POK</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('post.formRKO')}}" method="post">
                    @csrf
                    <div class="ibox-content">
                        {{--<div class="row">
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
                                               class="form-control" required> --}}{{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}{{--
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-lg-12">
                                    <div class="form-group"><label>Realisasi Keuangan (Rp) *</label>
                                        <input placeholder="Realisasi Keuangan (Rp)" data-mask="#.##0" data-mask-reverse="true" name="realisasi_keu" id="realisasi_keu"
                                               class="form-control" required> --}}{{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}{{--
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-lg-12">
                                    <div class="form-group"><label>Keterangan *</label>
                                        <input placeholder="Keterangan" name="ket" id="ket"
                                               class="form-control" required> --}}{{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}{{--
                                    </div>
                                </div>
                            </div>
                        </div>--}}

                        <div class="row">

                            <div class="col-12">
                                <div class="form-group" id="pd">
                                <label class="control-label" required>Kegiatan*</label>
                                <select class="select2_demo_2 form-control" name="kegiatan" >
                                    @foreach($dropdown as $rko)
                                        <option value="{{$rko->id}}">{{$rko->nama_kegiatan}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <input placeholder="Nama Sub Kegiatan" type="text" name="nama_sub_rko" id="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input placeholder="Jumlah Anggaran Sub Kegiatan" type="number" name="jml_anggaran_sub_rko" id="">
                                </div>
                            </div>
                            <div class="col-4" id="target">

                                    @for($i=1;$i<=12;$i++)
                                        <label>
                                            @switch($i)
                                                @case(1)
                                                Januari
                                                @break
                                                @case(2)
                                                Februari
                                                @break
                                                @case(3)
                                                Maret
                                                @break
                                                @case(4)
                                                April
                                                @break
                                                @case(5)
                                                Mei
                                                @break
                                                @case(6)
                                                Juni
                                                @break
                                                @case(7)
                                                Juli
                                                @break
                                                @case(8)
                                                Agustus
                                                @break
                                                @case(9)
                                                September
                                                @break
                                                @case(10)
                                                Oktober
                                                @break
                                                @case(11)
                                                November
                                                @break
                                                @case(12)
                                                Desember
                                                @break
                                            @endswitch
                                        </label>
                                        <input placeholder="Target" type="text" name="target_sub_rko[{{$i}}]" id="">
                                    @endfor
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">

                                        </div>
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

