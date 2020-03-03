<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Kebutuhan Hidup Layak dan Upah Minimum Kabupaten / Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.umr')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.umr')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">UMR</th>
                            @if($user_name == 'Pengaduan' or 'Superadmin')
                                <th>Edit</th>
                                <th>Hapus</th>
                            @else
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rek_umr as $r)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$r->kabupaten_kota}}</td>
                                <td>{{$r->tahun}}</td>
                                <td>{{$r->umr}}</td>

                                @if($user_name == 'Pengaduan' or 'Superadmin')
                                    <td>
                                        <form action="{{route('edit.umr', $r->id)}}">
                                            <button class="btn btn-block btn-outline-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('delete.umr', $r->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-block btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                @else
                                @endif
                            </tr>
                        @endforeach
                        <tr class="danger">
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td>{{$rek_umr->sum('umr')}}</td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Jumlah Pencari Pekerja Terdaftar Menurut Tingkat Pendidikan</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{--{{route('export.pendidikan')}}--}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{--{{route('export.pendidikan')}}--}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Pendidikan Terakhir</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Laki-laki</th>
                            <th colspan="1">Perempuan</th>
                            <th colspan="1">Jumlah</th>
                            @if($user_name == 'Pengaduan' or 'Superadmin')
                                <th>Edit</th>
                                <th>Hapus</th>
                            @else
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rek_pendidikan as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->pendidikan_terakhir}}</td>
                                <td>{{$p->tahun}}</td>
                                <td>{{$p->laki}}</td>
                                <td>{{$p->perempuan}}</td>
                                <td>{{$p->jumlah}}</td>
                                @if($user_name == 'Pengaduan' or 'Superadmin')
                                    <td>
                                        <form action="{{route('edit.pendidikan', $p->id)}}">
                                            <button class="btn btn-block btn-outline-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('delete.pendidikan', $p->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-block btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                @else
                                @endif
                            </tr>
                        @endforeach
                        <tr class="danger">
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td>{{$rek_pendidikan->sum('laki')}}</td>
                            <td>{{$rek_pendidikan->sum('perempuan')}}</td>
                            <td></td>
                            {{--<td>{{$rek_umr->sum('umr')}}</td>--}}
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Jumlah Pencari Pekerja Terdaftar Menurut Tingkat Pendidikan</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{--{{route('export.pendidikan')}}--}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{--{{route('export.pendidikan')}}--}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Pendidikan Terakhir</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Laki-laki</th>
                            <th colspan="1">Perempuan</th>
                            <th colspan="1">Jumlah</th>
                            @if($user_name == 'Pengaduan' or 'Superadmin')
                                <th>Edit</th>
                                <th>Hapus</th>
                            @else
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rek_pendidikan as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->pendidikan_terakhir}}</td>
                                <td>{{$p->tahun}}</td>
                                <td>{{$p->laki}}</td>
                                <td>{{$p->perempuan}}</td>
                                <td>{{$p->jumlah}}</td>
                                @if($user_name == 'Pengaduan' or 'Superadmin')
                                    <td>
                                        <form action="{{route('edit.pendidikan', $p->id)}}">
                                            <button class="btn btn-block btn-outline-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('delete.pendidikan', $p->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-block btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                @else
                                @endif
                            </tr>
                        @endforeach
                        <tr class="danger">
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td>{{$rek_pendidikan->sum('laki')}}</td>
                            <td>{{$rek_pendidikan->sum('perempuan')}}</td>
                            <td>{{$rek_pendidikan->sum('jumlah')}}</td>

                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Pencari Kerja Terdaftar dan Lowongan Kerja Menurut Kabupaten / Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{--{{route('export.loker')}}--}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{--{{route('export.loker')}}--}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Pencari Kerja Terdaftar</th>
                            <th colspan="3">Lowongan Kerja Terdaftar</th>

                        </tr>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Laki-laki</th>
                            <th colspan="1">Perempuan</th>
                            <th colspan="1">Jumlah</th>
                            <th colspan="1">Laki-laki</th>
                            <th colspan="1">Perempuan</th>
                            <th colspan="1">Jumlah</th>
                            @if($user_name == 'Pengaduan' or 'Superadmin')
                                <th>Edit</th>
                                <th>Hapus</th>
                            @else
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rek_loker as $l)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$l->kabupaten_kota}}</td>
                                <td>{{$l->tahun}}</td>
                                <td>{{$l->pencari_laki}}</td>
                                <td>{{$l->pencari_perempuan}}</td>
                                <td>{{$l->pencari_jumlah}}</td>
                                <td>{{$l->lowongan_laki}}</td>
                                <td>{{$l->lowongan_perempuan}}</td>
                                <td>{{$l->lowongan_jumlah}}</td>
                                @if($user_name == 'Pengaduan' or 'Superadmin')
                                    <td>
                                        <form action="{{route('edit.loker', $l->id)}}">
                                            <button class="btn btn-block btn-outline-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('delete.pendidikan', $l->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-block btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                @else
                                @endif
                            </tr>
                        @endforeach
                        <tr class="danger">
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{--{{$rek_pendidikan->sum('jumlah')}}--}}</td>

                        </tr>
                    </table>
                </div>
            </div>
    </div>
</div>
