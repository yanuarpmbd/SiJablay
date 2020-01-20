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
                <h5>REKAP PENGADUAN<strong>{{--{{$user_name}}--}}</strong></h5>
            </div>
            <div class="ibox-content">
                <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th data-breakpoints="all">Jenis Kelamin</th>
                        <th>Media</th>
                        <th>Jenis Layanan</th>
                        <th data-breakpoints="all">Nomor Telepon</th>
                        <th>Sektor</th>
                        <th data-breakpoints="all">WA/Email/Alamat Medsos</th>
                        <th data-breakpoints="all">Rincian Aduan</th>
                        <th data-breakpoints="all">Penyelesaian</th>
                        @if($user_name == 'Pengaduan' or 'Superadmin')
                        <th>Edit</th>
                        <th>Hapus</th>
                        @else
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rek_pengaduan as $r)
                        <tr>
                            <td>{{$r->tanggal}}</td>
                            <td>{{$r->nama}}</td>
                            <td>{{$r->jenis_kelamin}}</td>
                            <td>{{$r->media}}</td>
                            <td>{{$r->jenis_layanan}}</td>
                            <td>{{$r->no_telp}}</td>
                            <td>{{$r->sektor}}</td>
                            <td>{{$r->media}}</td>
                            <td>{{$r->wa_email}}</td>
                            <td>{{$r->rincian_aduan}}</td>
{{--                            <td>{{$r->penyelesaian}}</td>--}}
                            @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.pengaduan', $r->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.pengaduan', $r->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                            @else
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <form action="{{route('export.pengaduan')}}">
                            <button class="btn btn-app btn-danger" href="{{route('export.pengaduan')}}" type="submit">Download</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

