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
                <h5>DATA INVESTASI OSS <strong>{{--{{$user_name}}--}}</strong></h5>
            </div>
            <div class="ibox-content">
                <div class="form-group">
                    <form action="{{route('rekap.oss')}}">
                        <div class="form-group" id="data_1">
                            <label class="col-lg-12 control-label">Kabupaten/Kota</label>
                            <select class="form-control" name="kab_kota" id="kab_kota">
                                <option value="all">Pilih Semua...</option>
                                @foreach($kabkotas as $k)
                                <option value="{{$k->kab_kota}}">{{$k->kab_kota}}</option>
                                @endforeach
                            </select>
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="form-group">
                                        <button class="btn btn-app btn-success" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox-content">
                        <table class="footable" id="tablel" style="table-layout: fixed" data-paging="true" data-sorting="true" data-show-toggle="true" data-paging-size="20" data-filtering="true">
                            <thead>
                            <tr>
                                <th>NIB</th>
                                <th>Nama Perusahaan</th>
                                <th data-breakpoints="all" hidden>Alamat</th>
                                <th>Nama Pendaftar</th>
                                <th data-breakpoints="all" hidden>Telepon</th>
                                <th data-breakpoints="all" hidden>Email</th>
                                <th data-breakpoints="all" hidden>NIK</th>
                                <th>Daerah</th>
                                <th data-breakpoints="all" hidden>Jumlah TKI (Laki-Laki)</th>
                                <th data-breakpoints="all" hidden>Jumlah TKI (Perempuan)</th>
                                <th data-breakpoints="all" hidden>KBLI</th>
                                <th data-breakpoints="all" hidden>Bangunan</th>
                                <th data-breakpoints="all" hidden>Mesin Peralatan</th>
                                <th data-breakpoints="all" hidden>Mesin Peralatan Import</th>
                                <th data-breakpoints="all" hidden>Pembelian dan Pematangan Tanah</th>
                                <th data-breakpoints="all" hidden>Investasi Lain</th>
                                <th data-breakpoints="all" hidden>Jumlah Inventaris</th>
                                <th data-breakpoints="all" hidden>Modal Kerja 3 Bulanan</th>
                                <th>Jumlah Investasi</th>
                                <th data-breakpoints="all" hidden>Tanggal Pengajuan Permohonan OSS</th>
                                <th>Tanggal Terbit OSS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rek_oss as $r)
                                <tr>
                                    <td>{{$r->nib}}</td>
                                    <td>{{$r->nama_perseroan}}</td>
                                    <td>{{$r->alamat_pendirian}}</td>
                                    <td>{{$r->nama_pendaftar}}</td>
                                    <td>{{"0".$r->telepon_pendaftar}}</td>
                                    <td>{{$r->email_pendaftar}}</td>
                                    <td>{{$r->nik}}</td>
                                    <td>{{$r->daerah}}</td>
                                    <td>{{$r->jumlah_tki_l}}</td>
                                    <td>{{$r->jumlah_tki_p}}</td>
                                    <td>{{$r->kbli}}</td>
                                    <td>{{"Rp ". number_format($r->bangunan, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->mesin_peralatan, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->mesin_peralatan_impor, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->pembelian_pematangan_tanah, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->investasi_lain, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->jumlah_inventaris, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->modal_kerja, 0, ',', '.')}}</td>
                                    <td>{{"Rp ". number_format($r->jumlah_investasi, 0, ',', '.')}}</td>
                                    <td>{{$r->tanggal_pengajuan_oss}}</td>
                                    <td>{{$r->tanggal_terbit_oss}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="form-group">
                                    <form action="{{route('export.oss')}}">
                                        <button class="btn btn-app btn-danger" href="{{route('export.oss')}}" type="submit">Download</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
