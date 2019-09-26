<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>REKAP KEMITRAAN <strong>{{--{{$user_name}}--}}</strong></h5>
            </div>
            <div class="ibox-content">
                <div class="form-group">
                    <form action="{{route('rekap.mitra')}}">
                        <label class="col-lg-12 control-label">Sektor</label>
                        <div class="col-md-12">
                            <select class="form-control" name="sektor_req" id="sektor_req">
                                    <option value="Kelautan dan Perikanan">Kelautan dan Perikanan</option>
                                    <option value="Perindustrian">Perindustrian</option>
                                    <option value="Perdagangan">Perdagangan</option>
                            </select>
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
            </div>
            <div class="ibox-content">
                <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Status Badan Usaha</th>
                        <th>Alamat Perusahaan</th>
                        <th>Mou</th>
                        @if ($user_name == "Promosi" or "Superadmin")
                        <th>Edit</th>
                        @else
                        @endif
                        <th data-breakpoints="all">Nomor Telepon</th>
                        <th data-breakpoints="all">Alamat Proyek</th>
                        <th data-breakpoints="all">Kab/Kota</th>
                        <th data-breakpoints="all">Pemilik</th>
                        <th data-breakpoints="all">Jenis Produksi</th>
                        <th data-breakpoints="all">KBLI</th>
                        <th data-breakpoints="all">Kapasitas</th>
                        <th data-breakpoints="all">Nilai Investasi</th>
                        <th data-breakpoints="all">Jumlah Pegawai</th>
                        <th data-breakpoints="all">Aspek Kerjasama</th>
                        <th data-breakpoints="all">Sektor</th>
                        {{--<th>Edit</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($mitra) == 0)
                        <tr>
                            <td>

                            </td>
                        </tr>
                    @else
                        @foreach($mitra as $s)
                            <tr>
                                <td>{{$s->nama_perusahaan}}</td>
                                <td>{!! $s->status_bu !!}</td>
                                <td>{{$s->alamat_bu}}</td>
                                <td>
                                    <form action="{{route('download.mou', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">Download</button>
                                    </form>
                                </td>
                                @if ($user_name == "Promosi" or "Superadmin")
                                <td>
                                    <form action="{{route('edit.mitra', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">Edit</button>
                                    </form>
                                </td>
                                @else
                                @endif                                {{-- <td>
                                     <form action="{{route('cetak.kemitraan', $s->id)}}" method="get">
                                         <button class="btn-trans" ><i class="fa fa-check text-navy"></i></button>
                                     </form>
                                 </td>--}}
                                <td>{{$s->no_telp}}</td>
                                <td>{{$s->alamat_proyek}}</td>
                                <td>{{$s->kab_kota}}</td>
                                <td>{{$s->pemilik}}</td>
                                <td>{{$s->jns_produksi}}</td>
                                <td>{{$s->kbli}}</td>
                                <td>{{$s->kapasitas}}</td>
                                <td>{{$s->nilai_invest}}</td>
                                <td>{{$s->jml_pegawai}}</td>
                                <td>{{$s->aspek_krjsm}}</td>
                                <td>{{$s->sektor}}</td>
                                {{--<td>
                                    <form action="{{route('edit.kemitraan', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">edit</button>
                                    </form>
                                </td>--}}
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <form action="{{route('export.mitra')}}">
                            <button class="btn btn-app btn-danger" href="{{route('export.mitra')}}" type="submit">Download</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

