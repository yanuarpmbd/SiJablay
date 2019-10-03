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
                <h5>REKAP Target Realisasi RKO Bulan <strong>{{$bulans}}</strong></h5>
            </div>
            <div class="ibox-content">
                <div class="col-4">
                    <form action="{{route('rekap.rko')}}">
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


                <table class="footable table table-stripped toggle-arrow-tiny">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Jumlah Anggaran</th>
                        <th>Target Fisik</th>
                     {{--   <th>Edit</th>--}}
                    </tr>
                    </thead>

                    <tbody>

                        @foreach($rko as $t)
                            <tr>
                                <td style="text-align: left">{{$t->rko->id}}</td>
                                <td style="text-align: left">{{$t->rko->nama_kegiatan}}</td>
                                <td style="text-align: left">Rp {{number_format($t->rko->jml_anggaran),0, ',', '.'}}</td>
                                <td>{{$t->target}} %</td>
                             {{--   <td>
                                    <form action="">
                                        <button class="btn btn-block btn-outline-success">edit</button>
                                    </form>
                                </td>--}}
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

