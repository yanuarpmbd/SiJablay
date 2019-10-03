<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            {{--<div class="ibox-title">
                <h5>PELAKSANAAN APBD PROVINSI JAWA TENGAH&nbsp;</h5>
                <h5>TAHUN ANGGARAN 2019&nbsp;</h5>
                <h5>SAMPAI DENGAN BULAN {{$todays}} DI BIDANG {{$user_name}}&nbsp;</h5>
            </div>--}}
            <div class="ibox-title">
                <h5>REKAP Target Realisasi</h5>
            </div>
            <div class="col-6">
                <form action="{{ route('rekap.targetrealisasi') }}">
                    <div class="form-group" id="data_1">
                        <label class="col-lg-12 control-label">Bulan</label>
                        <div class="col-lg-12">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="bulan" id="bulan" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="ibox-content">
                <table class="footable table table-stripped toggle-arrow-tiny" style="table-layout: fixed">
                    <thead>
                    <tr>
                        <th>Bulan</th>
                        <th>Kegiatan (RKO)</th>
                        <th>Target</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($target as $t)
                        <tr>
                            <td>{{date('F, Y', strtotime($t->bulan))}}</td>
                            <td>{{$t->rko->nama_kegiatan}}</td>
                            <td>{{$t->target}}</td>
                            <td>
                                <form action="{{route('edit.targetrealisasi', $t->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.targetrealisasi', $t->id)}}">
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
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
                {{--<div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="form-group">
                            <form action="{{route('export.pok')}}">
                                <button class="btn btn-app btn-success" href="{{route('export.pok')}}" type="submit">Download</button>
                            </form>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</div>
