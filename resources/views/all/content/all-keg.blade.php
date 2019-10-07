<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>DATA KEGIATAN BULANAN DPMPTSP</h5>
            </div>
            <div class="ibox-content">
                <div class="col-6">
                    <form action="{{route('get.kegiatan')}}" id="formBulan">
                        <div class="form-group" id="data_2">
                            <label class="col-lg-12 control-label">Bulan</label>
                            <div class="col-lg-12">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="bulan" id="bulan" class="form-control" autocomplete="off" value="{{$todays}}">
                                </div>
                            </div>
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
                <table class="footable" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Detail Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Peserta</th>
                        <th data-breakpoints="all">Seksi</th>
                        <th data-breakpoints="all">Mulai Pukul</th>
                        <th data-breakpoints="all">Selesai Pukul</th>
                        <th>Bidang</th>
                        {{--<th>Benturan</th>--}}
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>

                    <tbody>

                    @if(count($keg) == 0)
                        <tr>
                            <td>
                                Belum Ada Kegiatan
                            </td>
                        </tr>

                    @else

                        @foreach($keg as $s)
                            <tr>
                                <td>{{$s->nama_kegiatan}}</td>
                                <td>{{Carbon\Carbon::parse($s->tanggal)->formatLocalized('%A, %d %B %Y')}}</td>
                                <td>{{$s->tempat}}</td>
                                <td>{{$s->peserta}}</td>
                                <td>{{$s->seksi}}</td>
                                <td>{{$s->pukul_mulai}}</td>
                                <td>{{$s->pukul_mulai}}</td>
                                <td>
                                    {{$s->bidang_id}}
                                </td>
                                {{--<td>
                                    @if($s->crash == null)
                                        <span><i class="fa fa-check-square"
                                                 style="color: greenyellow;font-size: 25px"></i></span>
                                    @else
                                        <span><i class="fa fa-warning" style="color: red;font-size: 25px"></i></span>
                                    @endif
                                </td>--}}
                                <td>
                                    <form action="{{route('edit.kegiatan', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('hapus.kegiatan', $s->id)}}">
                                        <button class="btn btn-block btn-outline-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <form action="{{route('export.kegiatan')}}">
                            <button class="btn btn-app btn-danger" href="{{route('export.kegiatan')}}" type="submit">Download</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
