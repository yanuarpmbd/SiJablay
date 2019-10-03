<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! $message !!}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>REKAP RKO</h5>
            </div>
            <div class="ibox-content">
                <table class="footable table table-stripped toggle-arrow-tiny">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Jumlah Anggaran</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rek_rko as $r)
                        <tr>
                            <td style="text-align: left">{{$r->id}}</td>
                            <td style="text-align: left">{{$r->nama_kegiatan}}</td>
                            <td style="text-align: left">Rp {{number_format($r->jml_anggaran),0, ',', '.'}}</td>
                            <td>
                               <form action="{{route('edit.rko', $r->id)}}">
                                   <button class="btn btn-block btn-outline-success">edit</button>
                               </form>
                            </td>
                            <td>
                                <form action="{{route('delete.rko', $r->id)}}">
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
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

