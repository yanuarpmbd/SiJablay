<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
</style>
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
                <h5>REKAP PERIZINAN</h5>
            </div>
            <div class="ibox-content">
                <div class="col-6">
                    <form action="{{route('show.izin')}}">
                        <div class="form-group" id="data_1">
                            <label class="col-lg-12 control-label">Bulan</label>
                            <div class="col-lg-8">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="bulan" id="bulan" class="form-control"
                                           value="{{$today}}" autocomplete="off">
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
            </div>
            <div class="ibox-content">
                <table class="footable table table-stripped toggle-arrow-tiny" style="table-layout: auto; width: 100%">
                    <thead>
                        <tr>
                            <td colspan="15">Rekap Perizinan</td>
                        </tr>
                        <tr>
                            <td colspan="15">Dinas Penanaman Modal dan Pelayanan Terpadu Provinsi Jawa Tengah</td>
                        </tr>
                        <tr>
                            <td colspan="15">BULAN {{$todays}}</td>
                        </tr>
                        <tr>
                            <th class="tg-c3ow" rowspan="2">No</th>
                            <th class="tg-c3ow" rowspan="2">Bidang</th>
                            <th class="tg-c3ow">Bulan</th>
                            <th class="tg-c3ow" colspan="2">Layanan Output Bidang</th>
                            <th class="tg-c3ow" colspan="3">RE-Rata (Hari)</th>
                        </tr>
                        <tr>
                            <td class="tg-c3ow">{{$todays}}</td>
                            <td class="tg-c3ow">Izin</td>
                            <td class="tg-c3ow">Non Izin</td>
                            <td class="tg-c3ow">SOP</td>
                            <td class="tg-c3ow">Waktu Terselesaikan</td>
                            <td class="tg-c3ow">%</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rekap as $r)
                        <tr>
                            <td class="tg-0lax">{{$r->id}}</td>
                            <td class="tg-0lax">{{$r->izin_id}}</td>
                            <td class="tg-0lax">{{$r->jumlah_izin}}</td>
                            <td class="tg-0lax">{{$r->izin}}</td>
                            <td class="tg-0lax">{{$r->nonizin}}</td>
                            <td class="tg-0lax">{{$r->sop}}</td>
                            <td class="tg-0lax">{{$r->waktu_selesai}}</td>
                            <td class="tg-0lax">{{$r->persen_sop}}</td>
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
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="form-group">
                            <form action="{{route('export.perizinan')}}">
                                <button class="btn btn-app btn-danger" href="{{route('export.perizinan')}}" type="submit">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
