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
                <h5>DATA ASN DPMPTSP</h5>
            </div>
            <div class="ibox-content">
                <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Golongan</th>
                        <th>Jabatan</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($decode as $dec)
                        <tr>
                            <td>{{$dec->nip}}</td>
                            <td>{{$dec->nama}}</td>
                            <td>{{$dec->tgl_lahir}}</td>
                            <td>{{$dec->gol}}</td>
                            <td>{{$dec->jabatan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="hide-if-no-paging">
                    <tr>
                        <td colspan="5" class="text-center">
                            <ul class="pagination">
                            </ul>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
