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
                <h5>NOTULEN Bidang <strong>{{$user_name}}</strong></h5>
            </div>
            <div class="ibox-content">
                <table class="footable" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Acara</th>
                        <th>Hasil Rapat</th>
                        <th>Notulen</th>
                        <th data-breakpoints="all">Tanggal</th>
                        <th data-breakpoints="all">Tempat</th>
                        <th data-breakpoints="all">Peserta</th>
                        <th data-breakpoints="all">Pemimpin Rapat</th>
                        <th data-breakpoints="all">Notulis</th>
                        <th data-breakpoints="all">Pengampu</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($notulen as $s)
                            <tr>
                                <td>{{$s->acara}}</td>
                                <td>{!!  $s->hasil_rapat !!}</td>
                                <td>
                                    <form action="{{route('cetak.notulen', $s->id)}}" method="get">
                                        <button class="btn-trans"><i class="fa fa-download text-navy"></i></button>
                                    </form>
                                </td>
                                <td>{{$s->tgl}}</td>
                                <td>{{$s->tempat}}</td>
                                <td>{{$s->peserta}}</td>
                                <td>{{$s->pemimpin->nama}}</td>
                                <td>{{$s->notulis->nama}}</td>
                                <td>{{$s->pengampu->nama}}</td>
                                <td>
                                    <form action="{{route('edit.notulen', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('hapus.notulen', $s->id)}}">
                                        <button class="btn btn-block btn-outline-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

