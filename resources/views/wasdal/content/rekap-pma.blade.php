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
                <h5>REKAP REALISASI INVESTASI</h5>
            </div>
            <div class="ibox-content">
                <div class="form-group">
                    <form action="{{route('rekap.pma')}}">
                        <div class="form-group" id="data_1">
                            {{--<label class="col-lg-12 control-label">Kabupaten/Kota</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="kab_kota" id="kab_kota">
                                    <option selected value="all">Tampilkan Semua..</option>
                                    @foreach($kab_kotas as $k)
                                        <option value="{{$k->kab_kota}}">{{$k->kab_kota}}</option>
                                    @endforeach
                                </select>
                            </div>--}}
                            {{--<label class="col-lg-12 control-label"></label>
                            <label class="col-lg-12 control-label">Sektor</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="sektor" id="sektor">
                                    <option selected value="all">Tampilkan Semua..</option>
                                    @foreach($sektors as $s)
                                        <option value="{{$s->sektor}}">{{$s->sektor}}</option>
                                    @endforeach
                                </select>
                            </div>--}}
                            <label class="col-lg-12 control-label"></label>
                            <label class="col-lg-12 control-label">PMA/PMDN</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="pma_pmdn" id="pma_pmdn">
                                    <option selected value="all">Tampilkan Semua..</option>
                                    @foreach($pma_pmdns as $p)
                                        <option value="{{$p->pma_pmdn}}">{{$p->pma_pmdn}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-lg-12 control-label"></label>
                            <label class="col-lg-12 control-label">Wilayah</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="wilayah" id="wilayah">
                                    <option selected value="all">Tampilkan Semua..</option>
                                    <option value="kedungsapur">Kedungsapur</option>
                                    <option value="wanarakuti">Wanarakuti</option>
                                    <option value="subosukowonosraten">Subosukowonosraten</option>
                                    <option value="bergasmalang">Bergasmalang</option>
                                    <option value="petanglong">Petanglong</option>
                                    <option value="barlingmascakeb">Barlingmascakeb</option>
                                    <option value="purwomanggung">Purwomanggung</option>
                                    <option value="banglor">Banglor</option>
                                </select>
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
                <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Sektor</th>
                        <th data-breakpoints="all">Cetak Bidang Usaha</th>
                        <th data-breakpoints="all">Provinsi</th>
                        <th>Kab/Kota</th>
                        <th data-breakpoints="all">Negara</th>
                        <th data-breakpoints="all">No Izin</th>
                        @if ($pma_pmdn == "PMA")
                            <th>Tambahan Investasi (Dalam US$.Ribu)</th>
                            <th>Total Investasi (Dalam US$.Ribu)</th>
                        @else
                            <th>Tambahan Investasi (Dalam Rp.Juta)</th>
                            <th>Total Investasi (Dalam Rp.Juta)</th>
                        @endif
                        <th data-breakpoints="all">Proyek</th>
                        <th data-breakpoints="all">TKI</th>
                        <th data-breakpoints="all">TKA</th>
                        <th>Tahun</th>
                        <th>PMA/PMDN</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pma_invest as $r)
                        <tr>
                            <td>{{$r->nama_perusahaan}}</td>
                            <td>{{$r->sektor}}</td>
                            <td hidden>{{$r->cetak_bid_usaha}}</td>
                            <td hidden>{{$r->provinsi}}</td>
                            <td>{{$r->kab_kota}}</td>
                            <td hidden>{{$r->negara}}</td>
                            <td hidden>{{$r->no_izin}}</td>
                            <td>{{number_format($r->tambahan_invest, 2, ',', '.')}}</td>
                            <td>{{number_format($r->total_invest, 2, ',', '.')}}</td >
                            <td hidden>{{$r->proyek}}</td>
                            <td hidden>{{$r->tki}}</td>
                            <td hidden>{{$r->tka}}</td>
                            <td>{{$r->tahun}}</td>
                            <td>{{$r->pma_pmdn}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{--<div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <form action="">
                                    <button class="btn btn-sm btn-white" href="" type="submit">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</div>
