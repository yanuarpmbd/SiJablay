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
                <h5>REKAP TABULASI <strong>{{--{{$user_name}}--}}</strong></h5>
            </div>

            <div class="col-6">
             <form action="{{ route('show.tabulasi') }}">
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
                <table class="footable table table-stripped toggle-arrow-tiny">
                    <thead>
                    <tr>
                      <td colspan="16">REKAP HELPDESK BULAN {{--  {{$todays}}--}} </td>
                    </tr>
                    <tr>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="3"> JENIS LAYANAN HELPDESK</td>
                        <td colspan="11"> RINCIAN MEDIA LAYANAN</td>
                    </tr>
                    <tr>
                        <td colspan="1">No</td>
                        <td colspan="1">Bidang</td>
                        <td colspan="1">Infrormasi</td>
                        <td colspan="1">Pengaduan</td>
                        <td colspan="1">Jumlah</td>
                        <td colspan="1">FO-Helpdesk</td>
                        <td colspan="1">SIAP Jateng</td>
                        <td colspan="1">Surat</td>
                        <td colspan="1">SMS</td>
                        <td colspan="1">Lapor Gubernur</td>
                        <td colspan="1">Email</td>
                        <td colspan="1">Facebook</td>
                        <td colspan="1">Instagram</td>
                        <td colspan="1">Tweeter</td>
                        <td colspan="1">Whatsapp</td>
                        <td colspan="1">Jumlah</td>
                    </tr>

                    </thead>
                    <tbody>
                    @isset($sektors)
                    @foreach($sektors as $sektor)
                    <tr>
                        <td colspan="1">{{$loop->iteration}}</td>
                        <td colspan="1">{{$sektor->nama_sektor}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('sektor', $sektor->nama_sektor)->where('jenis_layanan', 'Informasi'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('sektor', $sektor->nama_sektor)->where('jenis_layanan', 'Pengaduan'))}}</td>
                        <td colspan="1"> {{(count($rek_pengaduan->where('sektor', $sektor->nama_sektor)->where('jenis_layanan', 'Informasi')))+ (count($rek_pengaduan->where('sektor', $sektor->nama_sektor)->where('jenis_layanan', 'Pengaduan')))}}</td>

                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'FO-Helpdesk'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'SIAP Jateng'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'Surat'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'SMS'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'Lapor Gubernur'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'Email'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'Facebook'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'Instagram'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'tweeter'))}}</td>
                        <td colspan="1"> {{count($rek_pengaduan->where('media', $sektor->nama_media)->where('jenis_layanan', 'Whatsapp'))}}</td>
                        <td colspan="1"></td>
                    </tr>
                    @endforeach
                    @endisset
                    <tr>
                        <td colspan="2">Total</td>
                        <td colspan="1">{{$jml_jns_layanan_informasi}}</td>
                        <td colspan="1">{{$jml_jns_layanan_pengaduan}}</td>
                        <td colspan="1"> {{($jml_jns_layanan_pengaduan) + ($jml_jns_layanan_informasi)}}</td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                        <td colspan="1"> </td>
                    </tr>
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




            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <form action="{{route('export.tabulasi')}}">
                            <button class="btn btn-app btn-danger" href="{{route('export.tabulasi')}}" type="submit">Download</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
