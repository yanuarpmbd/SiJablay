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
            @if(session()->has('bad'))
                <div class="alert alert-danger alert-block">
                    {{ session()->get('bad') }}
                </div>
            @endif
            @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>REKAP TABULASI <strong>{{--{{$user_name}}--}}</strong></h5>
            </div>

            <div class="col-6">
             <form action="{{ route('gabung.pengaduan') }}">
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
                    <tr class="danger">
                      <td colspan="17">
                          REKAP HELPDESK BULAN
                          @if($bulan == null)

                              @else
                              {{\Illuminate\Support\Carbon::parse($bulan)->format('m')}}
                          @endif
                                {{$todays}}
                      </td>
                    </tr>
                    <tr class="info">
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="4"> JENIS LAYANAN HELPDESK</td>
                        <td colspan="11"> RINCIAN MEDIA LAYANAN</td>
                    </tr>
                    <tr class="warning">
                        <td colspan="1">No</td>
                        <td colspan="1">Bidang</td>
                        <td colspan="1">Infrormasi</td>
                        <td colspan="1">Pengaduan</td>
                        <td colspan="1">Satgas</td>
                        <td colspan="1">Jumlah</td>
                        <td colspan="1">Twitter</td>
                        <td colspan="1">Lapor Gubernur</td>
                        <td colspan="1">Surat</td>
                        <td colspan="1">FO-Helpdesk</td>
                        <td colspan="1">SIAP Jateng</td>
                        <td colspan="1">SMS</td>
                        <td colspan="1">Email</td>
                        <td colspan="1">Facebook</td>
                        <td colspan="1">Instagram</td>
                        <td colspan="1">Whatsapp</td>
                        <td colspan="1">Jumlah</td>
                    </tr>

                    </thead>
                    <tbody>
                    @isset($sektors)
                    @foreach($sektors as $sektor)

                    <tr class="active">
                        <td colspan="1">{{$loop->iteration}}</td>
                        <td colspan="1">{{$sektor->nama_sektor}}</td>
                        <td colspan="1">
                            @if(count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '2')) == 0)
                                -
                            @else
                            {{count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '2'))}}
                            @endif
                        </td>
                        <td colspan="1">
                            @if(count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '3')) == 0)
                                -
                                @else
                            {{count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '3'))}}
                                @endif
                        </td>

                        <td colspan="1">
                            @if(count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '4')) == 0)
                                -
                            @else
                                {{count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '4'))}}
                            @endif
                        </td>

                        <td colspan="1">{{(count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '2')) + count($rek_pengaduan->where('sektor', $sektor->id)->where('jenis_layanan', '3')))}}

                        </td>
                        @foreach($medias as $media)

                            <td colspan="1">
                                @if (count($rek_pengaduan->where('media', $media->id)->where('sektor', $sektor->id)) ==0)
                                    -
                                    @else
                                    {{count($rek_pengaduan->where('media', $media->id)->where('sektor', $sektor->id))}}
                                    @endif
                            </td>
                        @endforeach
                        <td colspan="1">
                            {{count($rek_pengaduan->where('sektor', $sektor->id))}}

                        </td>
                    </tr>
                    @endforeach
                    @endisset
                    <tr class="danger">
                        <td colspan="2">Total</td>
                        <td colspan="1">{{count($rek_pengaduan->where('jenis_layanan', '2'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('jenis_layanan', '3'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('jenis_layanan', '4'))}}</td>
                        <td colspan="1">{{(count($rek_pengaduan->where('jenis_layanan', '2')) +
                                           count($rek_pengaduan->where('jenis_layanan', '3')) +
                                           count($rek_pengaduan->where('jenis_layanan', '4')))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '1'))}} </td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '2'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '3'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '4'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '5'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '6'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '7'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '8'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '9'))}}</td>
                        <td colspan="1">{{count($rek_pengaduan->where('media', '10'))}}</td>
                        <td colspan="1"> {{(count($rek_pengaduan->where('media', '1')) +
                                           count($rek_pengaduan->where('media', '2')) +
                                           count($rek_pengaduan->where('media', '3')) +
                                           count($rek_pengaduan->where('media', '4')) +
                                           count($rek_pengaduan->where('media', '5')) +
                                           count($rek_pengaduan->where('media', '6')) +
                                           count($rek_pengaduan->where('media', '7')) +
                                           count($rek_pengaduan->where('media', '8')) +
                                           count($rek_pengaduan->where('media', '9')) +
                                           count($rek_pengaduan->where('media', '10'))
                                            )}}</td>
                    </tr>
                    </tbody>
                </table>





            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <form action="{{route('export.tabulasi')}}">

                            @if(isset($bulan))
                                <input name="bulanExport" value="{{ $bulan }}" hidden>
                            @else

                            @endif
                            <button class="btn btn-app btn-danger" href="{{route('export.tabulasi')}}" type="submit">Download</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
