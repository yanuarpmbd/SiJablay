<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Banyaknya Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota dan Status Penanaman Modal</h5>
            </div>

            <div class="col-md-6">
                <form action="{{route('export.penanaman')}}">

                    {{--@if(isset($bulan))--}}
                       {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                   {{-- @else--}}

                   {{-- @endif--}}
                    <button class="btn btn-app btn-danger" href="{{route('export.penanaman')}}" type="submit">Download</button>
                </form>
            </div>


            <div class="ibox-content">
                <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                    <thead>
                    <tr class="active">
                        <th colspan="1">No</th>
                        <th colspan="1">Kabupaten/Kota</th>
                        <th colspan="1">Tahun</th>
                        <th colspan="1">PMDN</th>
                        <th colspan="1">PPMA</th>
                        <th colspan="1">Non Fasilitas</th>
                        <th colspan="1">Jumlah</th>

                        @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                        @else
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rek_statuspenanaman as $s)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$s->kabupaten_kota}}</td>
                            <td>{{$s->tahun}}</td>
                            <td>{{$s->pmdn}}</td>
                            <td>{{$s->ppma}}</td>
                            <td>{{$s->non_fasilitas}}</td>
                            <td>{{$s->jumlah}}</td>

                            @if($user_name == 'Pengaduan' or 'Superadmin')
                                <td>
                                    <form action="{{route('edit.penanaman', $s->id)}}">
                                        <button class="btn btn-block btn-outline-success">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('delete.penanaman', $s->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-block btn-outline-danger">Hapus</button>
                                    </form>
                                </td>
                            @else
                            @endif
                        </tr>
                    @endforeach

                   <tr class="danger">
                       <td></td>
                       <td colspan="1">Total</td>
                       <td></td>
                       <td>{{$rek_statuspenanaman->sum('pmdn')}}</td>
                       <td>{{$rek_statuspenanaman->sum('ppma')}}</td>
                       <td>{{$rek_statuspenanaman->sum('non_fasilitas')}}</td>
                       <td>{{$rek_statuspenanaman->sum('jumlah')}}</td>
                   </tr>
                </table>
            </div>
        </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Banyaknya Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota dan Kepemilikan Modal</H5>
                </div>

                <div class="col-md-6">
                    <form action="{{route('export.kepemilikan')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.kepemilikan')}}" type="submit">Download</button>
                    </form>
                </div>

                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Pemerintah Pusat</th>
                            <th colspan="1">Pemerintah Daerah</th>
                            <th colspan="1">Swasta Nasional</th>
                            <th colspan="1">Asing</th>
                            <th colspan="1">Jumlah</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_kepemilikan as $k)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$k->kabupaten_kota}}</td>
                            <td>{{$k->tahun}}</td>
                            <td>{{$k->pem_pusat}}</td>
                            <td>{{$k->pem_daerah}}</td>
                            <td>{{$k->swasta_nas}}</td>
                            <td>{{$k->asing}}</td>
                            <td>{{$k->jumlah}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.kepemilikan', $k->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.kepemilikan', $k->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_kepemilikan->sum('pem_pusat')}}</td>
                            <td>{{$rek_kepemilikan->sum('pem_daerah')}}</td>
                            <td>{{$rek_kepemilikan->sum('swasta_nas')}}</td>
                            <td>{{$rek_kepemilikan->sum('asing')}}</td>
                            <td>{{$rek_kepemilikan->sum('jumlah')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Banyaknya Perusahaan/Usaha Menengah dan Besar dan Pekerja Dibayar/Tidak Dibayar Menurut Kabupaten/Kota dan Jenis Kelamin</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.bayarpekerja')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.bayarpekerja')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">

                            <th colspan="13">Pekerjaan dibayar / tidak dibayar </th>
                        </tr>
                        <tr>
                            <th colspan="4"></th>
                            <th colspan="3">Tenaga Kerja Produksi</th>
                            <th colspan="3">Tenaga Kerja Lainnya</th>
                            <th colspan="3"></th>
                        </tr>
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="1">Kabupaten / Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Banyaknya Perusahaan</th>
                            <th colspan="1" >Pria</th>
                            <th colspan="1">Wanita</th>
                            <th colspan="1">Jumlah</th>
                            <th colspan="1">Pria</th>
                            <th colspan="1">Wanita</th>
                            <th colspan="1">Jumlah</th>
                            <th colspan="1">Total</th>
                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_bayarpekerja as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->kabupaten_kota}}</td>
                            <td>{{$p->tahun}}</td>
                            <td>{{$p->banyak_perusahaan}}</td>
                            <td>{{$p->produksi_pria}}</td>
                            <td>{{$p->produksi_wanita}}</td>
                            <td>{{$p->jml_produksi}}</td>
                            <td>{{$p->lainnya_pria}}</td>
                            <td>{{$p->lainnya_wanita}}</td>
                            <td>{{$p->jml_lainnya}}</td>
                            <td>{{$p->total}}</td>
                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.bayarpekerja', $p->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.bayarpekerja', $p->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_bayarpekerja->sum('banyak_perusahaan')}}</td>
                            <td>{{$rek_bayarpekerja->sum('produksi_pria')}}</td>
                            <td>{{$rek_bayarpekerja->sum('produksi_wanita')}}</td>
                            <td>{{$rek_bayarpekerja->sum('jml_produksi')}}</td>
                            <td>{{$rek_bayarpekerja->sum('lainnya_pria')}}</td>
                            <td>{{$rek_bayarpekerja->sum('lainnya_wanita')}}</td>
                            <td>{{$rek_bayarpekerja->sum('jml_lainnya')}}</td>
                            <td>{{$rek_bayarpekerja->sum('total')}}</td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Pengeluaran Perusahaan/Usaha Menengah dan Besar untuk Pekerja Menurut Kabupaten/Kota dan Jenis Pengeluaran</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.pengeluaranpekerja')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.pengeluaranpekerja')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr>
                            <th colspan="4"></th>
                            <th colspan="2">Tenaga Kerja Produksi</th>
                            <th colspan="2">Tenaga Kerja Lainnya</th>
                            <th colspan="3"></th>
                        </tr>
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Banyaknya Perusahaan</th>
                            <th colspan="1">Upah / Gaji</th>
                            <th colspan="1">Insentif Lainnya</th>
                            <th colspan="1">Upah / Gaji</th>
                            <th colspan="1">Insentif Lainnya</th>
                            <th data-breakpoints="all" colspan="1">Jumlah</th>
                            <th colspan="1">Pengeluaran per Pekerja</th>
                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_pengeluaranpekerja as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->kabupaten_kota}}</td>
                            <td>{{$p->tahun}}</td>
                            <td>{{$p->banyak_perusahaan}}</td>
                            <td>{{$p->produksi_upah}}</td>
                            <td>{{$p->produksi_insentif}}</td>
                            <td>{{$p->lainnya_upah}}</td>
                            <td>{{$p->lainnya_insentif}}</td>
                            <td>{{$p->jumlah}}</td>
                            <td>{{$p->pengeluaran_pekerja}}</td>
                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.pengeluaranpekerja', $p->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.pengeluaranpekerja', $p->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_pengeluaranpekerja->sum('banyak_perusahaan')}}</td>
                            <td>{{$rek_pengeluaranpekerja->sum('produksi_upah')}}</td>
                            <td>{{$rek_pengeluaranpekerja->sum('produksi_insentif')}}</td>
                            <td>{{$rek_pengeluaranpekerja->sum('lainnya_upah')}}</td>
                            <td>{{$rek_pengeluaranpekerja->sum('lainnya_insentif')}}</td>
                            <td>{{$rek_pengeluaranpekerja->sum('jumlah')}}</td>
                            <td>{{$rek_pengeluaranpekerja->sum('pengeluaran_pekerja')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Banyaknya Bahan Bakar dan Pelumas yang Digunakan menurut Kabupaten/Kota dan Jenis Bahan Bakar</H5>
                </div>
                <div class="col-md-6">
                <form action="{{route('export.bahanbakar')}}">

                    {{--@if(isset($bulan))--}}
                    {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                    {{-- @else--}}

                    {{-- @endif--}}
                    <button class="btn btn-app btn-danger" href="{{route('export.bahanbakar')}}" type="submit">Download</button>
                </form>
                </div>

                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Bensin (Ltr)</th>
                            <th colspan="1">Minyak Solar (Ltr)</th>
                            <th colspan="1">Batubara & Briket (Ton)</th>
                            <th colspan="1">Gas dari PGN dan Non PGN (M3)</th>
                            <th colspan="1">LPG (Kg)</th>
                            <th colspan="1">Pelumas (Ltr) </th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_bahanbakar as $b)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$b->kabupaten_kota}}</td>
                            <td>{{$b->tahun}}</td>
                            <td>{{$b->bensin}}</td>
                            <td>{{$b->solar}}</td>
                            <td>{{$b->batubara}}</td>
                            <td>{{$b->gas}}</td>
                            <td>{{$b->lpg}}</td>
                            <td>{{$b->pelumas}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.bahanbakar', $b->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.bahanbakar', $b->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_bahanbakar->sum('bensin')}}</td>
                            <td>{{$rek_bahanbakar->sum('solar')}}</td>
                            <td>{{$rek_bahanbakar->sum('batubara')}}</td>
                            <td>{{$rek_bahanbakar->sum('gas')}}</td>
                            <td>{{$rek_bahanbakar->sum('lpg')}}</td>
                            <td>{{$rek_bahanbakar->sum('pelumas')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Tenaga Listrik yang Diproduksi Sendiri, Dibeli, dan Dijual menurut Kabupaten/Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.listrik')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.listrik')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr>
                            <th colspan="4"></th>
                            <th colspan="2">Dibeli</th>
                            <th colspan="2">Dijual</th>
                            <th colspan="4"></th>
                        </tr>
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Produksi Sendiri</th>
                            <th colspan="1">Banyaknya (Kwh)</th>
                            <th colspan="1">Nilai (Ribuan Rp)</th>
                            <th colspan="1">Banyaknya (Kwh)</th>
                            <th colspan="1">Nilai (Ribuan Rp)</th>
                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_listrik as $l)
                        <tr>

                            <td>{{$loop->iteration}}</td>
                            <td>{{$l->kabupaten_kota}}</td>
                            <td>{{$l->tahun}}</td>
                            <td>{{$l->produksi_sendiri}}</td>
                            <td>{{$l->dibeli_banyaknya}}</td>
                            <td>{{$l->dibeli_nilai}}</td>
                            <td>{{$l->dijual_banyaknya}}</td>
                            <td>{{$l->dijual_nilai}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.listrik', $l->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.listrik', $l->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="1">Total</td>
                            <td>{{$rek_listrik->sum('produksi_sendiri')}}</td>
                            <td>{{$rek_listrik->sum('dibeli_banyaknya')}}</td>
                            <td>{{$rek_listrik->sum('dibeli_nilai')}}</td>
                            <<td>{{$rek_listrik->sum('dijual_banyaknya')}}</td>
                            <td>{{$rek_listrik->sum('dijual_nilai')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Pengeluaran Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.pengeluaranperusahaan')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.pengeluaranperusahaan')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Bahan Baku dan Penolong</th>
                            <th colspan="1">Bahan Bakar, Tenaga Listrik, dan Gas</th>
                            <th colspan="1">Pengeluaran untuk Jasa Industri</th>
                            <th colspan="1">Sewa Gedung, Mesin, dan Alat-alat</th>
                            <th colspan="1">Pengeluaran Lain</th>
                            <th colspan="1">Jumlah</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_pengeluaran_perusahaan as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->kabupaten_kota}}</td>
                            <td>{{$p->tahun}}</td>
                            <td>{{$p->bahan_baku}}</td>
                            <td>{{$p->bahan_bakar}}</td>
                            <td>{{$p->pengeluaran_jasa}}</td>
                            <td>{{$p->sewa}}</td>
                            <td>{{$p->pengeluaran_lain}}</td>
                            <td>{{$p->jumlah}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.pengeluaranperusahaan', $p->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.pengeluaranperusahaan', $p->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_pengeluaran_perusahaan->sum('dijual_nilai')}}</td>
                            <td>{{$rek_pengeluaran_perusahaan->sum('bahan_bakar')}}</td>
                            <td>{{$rek_pengeluaran_perusahaan->sum('pengeluaran_jasa')}}</td>
                            <td>{{$rek_pengeluaran_perusahaan->sum('sewa')}}</td>
                            <td>{{$rek_pengeluaran_perusahaan->sum('pengeluaran_lain')}}</td>
                            <td>{{$rek_pengeluaran_perusahaan->sum('jumlah')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Nilai Pendapatan Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.nilaipendapatanperusahaan')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.nilaipendapatanperusahaan')}}" type="submit">Download</button>
                    </form>
                </div>

                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Barang yang Dihasilkan</th>
                            <th colspan="1">Tenaga Listrik yang Dijual</th>
                            <th colspan="1">Jasa Industri yang Diterima dari Pihak Lain</th>
                            <th colspan="1">Selisih Nilai Stok Barang Setengah Jadi</th>
                            <th colspan="1">Penerimaan Lain dari Jasa Non Industri</th>
                            <th colspan="1">Jumlah</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_nilaipendapatan as $n)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$n->kabupaten_kota}}</td>
                            <td>{{$n->tahun}}</td>
                            <td>{{$n->barang_dihasilkan}}</td>
                            <td>{{$n->tenaga_listrik}}</td>
                            <td>{{$n->jasa_industri}}</td>
                            <td>{{$n->selisih_nilai_stok}}</td>
                            <td>{{$n->penerimaan}}</td>
                            <td>{{$n->jumlah}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.nilaipendapatanperusahaan', $n->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.nilaipendapatanperusahaan', $n->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_nilaipendapatan->sum('barang_dihasilkan')}}</td>
                            <td>{{$rek_nilaipendapatan->sum('tenaga_listrik')}}</td>
                            <td>{{$rek_nilaipendapatan->sum('jasa_industri')}}</td>
                            <td>{{$rek_nilaipendapatan->sum('selisih_nilai_stok')}}</td>
                            <td>{{$rek_nilaipendapatan->sum('penerimaan')}}</td>
                            <td>{{$rek_nilaipendapatan->sum('jumlah')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Nilai Tambah Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.nilaitambahperusahaan')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.nilaitambahperusahaan')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Nilai Output</th>
                            <th colspan="1">Biaya Input</th>
                            <th colspan="1">Nilai Tambah Harga Pasar</th>
                            <th colspan="1">Pajak Tak Langsung</th>
                            <th colspan="1">Nilai Tambah (Biaya Faktor Produksi)</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_nilaitambah as $n)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$n->kabupaten_kota}}</td>
                            <td>{{$n->tahun}}</td>
                            <td>{{$n->nilai_output}}</td>
                            <td>{{$n->biaya_input}}</td>
                            <td>{{$n->harga_pasar}}</td>
                            <td>{{$n->pajak_tak_langsung}}</td>
                            <td>{{$n->biaya_faktor_prduksi}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.nilaitambahperusahaan', $n->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.nilaitambahperusahaan', $n->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_nilaitambah->sum('nilai_output')}}</td>
                            <td>{{$rek_nilaitambah->sum('biaya_input')}}</td>
                            <td>{{$rek_nilaitambah->sum('harga_pasar')}}</td>
                            <td>{{$rek_nilaitambah->sum('pajak_tak_langsung')}}</td>
                            <td>{{$rek_nilaitambah->sum('biaya_faktor_prduksi')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Selisih Nilai Stok Awal dan Akhir Tahun menurut Kabupaten/Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.stokawal')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.stokawal')}}" type="submit">Download</button>
                    </form>
                </div>

                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Selisih Nilai Stok Bahan Baku</th>
                            <th colspan="1">Selisih Nilai Stok Barang Setengah Jadi</th>
                            <th colspan="1">Selisih Nilai Stok Barang Jadi yang Dihasilkan</th>
                            <th colspan="1">Jumlah Selisih Nilai Stok</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_stokawal as $s)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$s->kabupaten_kota}}</td>
                            <td>{{$s->tahun}}</td>
                            <td>{{$s->bahan_baku}}</td>
                            <td>{{$s->setengah_jadi}}</td>
                            <td>{{$s->barang_jadi}}</td>
                            <td>{{$s->jumlah_selisih}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.stokawal', $s->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.stokawal', $s->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_stokawal->sum('bahan_baku')}}</td>
                            <td>{{$rek_stokawal->sum('setengah_jadi')}}</td>
                            <td>{{$rek_stokawal->sum('barang_jadi')}}</td>
                            <td>{{$rek_stokawal->sum('jumlah_selisih')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Pembelian/Penambahan dan Pembuatan/Perbaikan Barang Modal Tetap Menurut Kabupaten/Kota</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.barangmodal')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.barangmodal')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Tanah</th>
                            <th colspan="1">Gedung</th>
                            <th colspan="1">Mesin & Perlengkapan</th>
                            <th colspan="1">Kendaraan</th>
                            <th colspan="1">Modal Tetap Lainnya</th>
                            <th data-breakpoints="all" colspan="1">Jumlah</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_barangmodal as $b)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$b->kabupaten_kota}}</td>
                            <td>{{$b->tahun}}</td>
                            <td>{{$b->tanah}}</td>
                            <td>{{$b->gedung}}</td>
                            <td>{{$b->mesin}}</td>
                            <td>{{$b->kendaraan}}</td>
                            <td>{{$b->tetap_lainnya}}</td>
                            <td>{{$b->jumlah}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.barangmodal', $b->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.barangmodal', $b->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_barangmodal->sum('tanah')}}</td>
                            <td>{{$rek_barangmodal->sum('gedung')}}</td>
                            <td>{{$rek_barangmodal->sum('mesin')}}</td>
                            <td>{{$rek_barangmodal->sum('kendaraan')}}</td>
                            <td>{{$rek_barangmodal->sum('tetap_lainnya')}}</td>
                            <td>{{$rek_barangmodal->sum('jumlah')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <H5>Penjualan/Pengurangan Barang Modal</H5>
                </div>
                <div class="col-md-6">
                    <form action="{{route('export.penjualan')}}">

                        {{--@if(isset($bulan))--}}
                        {{-- <input name="bulanExport" value="{{ $bulan }}" hidden>--}}
                        {{-- @else--}}

                        {{-- @endif--}}
                        <button class="btn btn-app btn-danger" href="{{route('export.penjualan')}}" type="submit">Download</button>
                    </form>
                </div>
                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="1">No</th>
                            <th colspan="1">Kabupaten/Kota</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Tanah</th>
                            <th colspan="1">Gedung</th>
                            <th colspan="1">Mesin & Perlengkapan</th>
                            <th colspan="1">Kendaraan</th>
                            <th colspan="1">Modal Tetap Lainnya</th>
                            <th colspan="1">Jumlah</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                        {{--{{dump($rek_penjualan)}}--}}
                         @foreach($rek_penjualan as $j)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$j->kabupaten_kota}}</td>
                            <td>{{$j->tahun}}</td>
                            <td>{{$j->jual_tanah}}</td>
                            <td>{{$j->jual_gedung}}</td>
                            <td>{{$j->jual_mesin}}</td>
                            <td>{{$j->jual_kendaraan}}</td>
                            <td>{{$j->jual_tetap_lainnya}}</td>
                            <td>{{$j->jual_jumlah}}</td>

                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.penjualan', $j->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.penjualan', $j->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                             @else
                             @endif
                        </tr>
                         @endforeach
                        <tr class="danger">
                            <td></td>
                            <td colspan="2">Total</td>
                            <td>{{$rek_penjualan->sum('jual_tanah')}}</td>
                            <td>{{$rek_penjualan->sum('jual_gedung')}}</td>
                            <td>{{$rek_penjualan->sum('jual_mesin')}}</td>
                            <td>{{$rek_penjualan->sum('jual_kendaraan')}}</td>
                            <td>{{$rek_penjualan->sum('jual_tetap_lainnya')}}</td>
                            <td>{{$rek_penjualan->sum('jual_jumlah')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

{{-- ---------------------------------------------}}
    </div>
</div>
