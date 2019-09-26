
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
                <h5>REKAP DATA BIDANG <strong>{{--{{$user_name}}--}}</strong></h5>
            </div>
            <div class="ibox-content">
                @if ($user == "pdi")
                <table class="footable table table-stripped toggle-arrow-tiny">
                    <thead>
                        <tr>
                        <th>Nama Dokumen</th>
                        <th>Tanggal Dokumen</th>
                        <th>Bidang</th>
                        <th>Keterangan</th>
                        <th>Dokumen</th>
                        {{--<th>Edit</th>--}}
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($allbidang as $s)
                            <tr>
                                <td>{{$s->nama_dok}}</td>
                                <td>{{$s->bulan}}</td>
                                <td>{{$s->bidang}}</td>
                                <td>{{$s->ket}}</td>
                                <td>
                                    <form action="{{route('download.allbidang', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">Download</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @else
                        {{"Bukan Kewenangan Bidang Anda"}}
                    @endif
                    <tfoot>
                    <tr>

                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>

