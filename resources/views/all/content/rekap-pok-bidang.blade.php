<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
</style>

<div class="col-6">
    <form action="{{ route('rekap.pok') }}">
        <div class="form-group" id="data_1">
            <label class="col-lg-12 control-label">Bulan</label>
            <div class="col-lg-12">
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input type="text" name="bulan" id="bulan" class="form-control"
                           value="{{$today}}" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-sm btn-white" type="submit">Submit</button>
        </div>
    </form>
</div>

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
            <div class="ibox-content">
                <table class="footable table table-stripped toggle-arrow-tiny">
                    <thead>
                    <tr>
                        <td colspan="15">PELAKSANAAN APBD PROVINSI JAWA TENGAH</td>
                    </tr>
                    <tr>
                        <td colspan="15">TAHUN ANGGARAN 2019</td>
                    </tr>
                    <tr>
                        <td colspan="15">SAMPAI DENGAN BULAN {{$todays}}</td>
                    </tr>
                    <tr>
                        <th class="tg-c3ow" rowspan="3">No</th>
                        <th class="tg-c3ow" rowspan="3">Nama Kegiatan</th>
                        <th class="tg-c3ow" rowspan="3">Jumlah Anggaran</th>
                        <th class="tg-c3ow" rowspan="3">Target Fisik (%)</th>
                        <th class="tg-c3ow" colspan="2">s/d Bulan Lalu</th>
                        <th class="tg-c3ow" colspan="3">Bulan {{$todays}}</th>
                        <th class="tg-c3ow" colspan="4">Sampai dengan {{$todays}}</th>
                        <th class="tg-c3ow" rowspan="3">Deviasi</th>
                        <th class="tg-c3ow" rowspan="3">Keterangan</th>
                    </tr>
                    <tr>
                        <td class="tg-c3ow" rowspan="2">Real Fisik (Rp)</td>
                        <td class="tg-c3ow" rowspan="2">Reak Keu (Rp)</td>
                        <td class="tg-c3ow" rowspan="2">Keu</td>
                        <td class="tg-c3ow" colspan="2">Fisik</td>
                        <td class="tg-c3ow" colspan="2">Realisasi Fisik</td>
                        <td class="tg-c3ow" colspan="2">Realisasi Keu</td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow">Rp</td>
                        <td class="tg-c3ow">%</td>
                        <td class="tg-c3ow">%</td>
                        <td class="tg-c3ow">Rp</td>
                        <td class="tg-c3ow">%</td>
                        <td class="tg-c3ow">Rp</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pok as $ps)
                        <tr>
                            <td class="tg-0lax">{{$ps->rko_id}}</td>
                            <td class="tg-0lax">{{$ps->rko->nama_kegiatan}}</td>
                            <td class="tg-0lax">{{number_format($ps->rko->jml_anggaran, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{$ps->target}}</td>
                            <td class="tg-0lax">{{number_format($ps->fisik_sblm_bln, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{number_format($ps->keu_sblm_bln, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{number_format($ps->realisasi_keu, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{number_format($ps->realisasi_fisik, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{round(((($ps->realisasi_fisik)/($ps->rko->jml_anggaran))*100),2)}}</td>
                            <td class="tg-0lax">{{round(((($ps->fisik_smp_skrg)/($ps->rko->jml_anggaran))*100),2)}}</td>
                            <td class="tg-0lax">{{number_format($ps->fisik_smp_skrg, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{round(((($ps->keu_smp_skrg)/($ps->rko->jml_anggaran))*100),2)}}</td>
                            <td class="tg-0lax">{{number_format($ps->keu_smp_skrg, 0, ',', '.')}}</td>
                            <td class="tg-0lax">{{($ps->deviasi)}}</td>
                            <td class="tg-0lax">{{($ps->ket)}}</td>
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
                            <form action="{{route('export.pok')}}">
                                <button class="btn btn-app btn-success" href="{{route('export.pok')}}" type="submit">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

