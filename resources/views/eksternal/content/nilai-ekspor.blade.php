<div class="row">
    <div class="col-lg-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                            <div class="ibox-content">
                                <div class="ibox-title">
                                    <H5>Volume dan Nilai Menurut Jenis Komoditi di Provinsi Jawa Tengah</H5>
                                </div>
           {{--<div class="form-group">
                 <form action="{{route('filter')}}" method="post">
                     @csrf
                     <div class="col-md-6">
                         <label class="col-lg-1 control-label"> Dari Tahun</label>
                         <select class="form-control" name="from_tahun" id="from_tahun">
                             <option value="" selected>Dari Tahun</option>
                             @foreach($tahuns as $tahun)
                                 <option value="{{$tahun}}">{{$tahun}} </option>
                             @endforeach
                         </select>
                     </div>

                     <div class="col-md-6">
                         <label class="col-lg-1 control-label">Sampai Tahun</label>
                         <select class="form-control" name="to_tahun" id="to_tahun">
                             <option value="" selected>Sampai Tahun</option>
                             @foreach($tahuns as $tahun)
                                 <option value="{{$tahun}}">{{$tahun}} </option>
                             @endforeach
                         </select>
                     </div>
                     --}}{{-- {{dd($r->tahun)}}--}}{{--
                     <div class="col-md-6">
                         <label class="col-lg-12 control-label">Jenis Volume Nilai</label>
                         <select class="form-control" name="volume" id="volume">
                             <option value="" selected>Pilih Ekspor/ Import </option>
                             @foreach($volumes as $volume)
                                 <option value="{{$volume}}">{{$volume}} </option>
                             @endforeach
                         </select>
                     </div>
                     <div class="col-md-6">
                         <label class="col-lg-12 control-label">Jenis Komoditi</label>
                         <select class="form-control" name="komoditi" id="komoditi">
                             <option value="" selected>Pilih Jenis Komoditi</option>
                             @foreach($komoditis as $komoditi)
                                 <option value="{{$komoditi}}">{{$komoditi}} </option>
                             @endforeach
                         </select>
                     </div>

                     <div class="ibox-content">
                         <div class="col-md-6">
                             <button class="btn btn-app btn-success" type="submit">Submit</button>
                         </div>
                     </div>
                 </form>
           </div>--}}
                                <div class="col-md-6">
                                    <form action="{{route('export.eksporimpor')}}">
                                        @if(isset($tahun))
                                            <input name="bulanExport" value="{{ $tahun }}" hidden>
                                        @else

                                        @endif
                                        <button class="btn btn-app btn-danger" href="{{route('export.eksporimpor')}}" type="submit">Download</button>
                                    </form>
                                </div>
                                <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                                        <thead>
                                        <tr class="active">
                                            <th colspan="2"></th>
                                            <th colspan="4">Volume dan Nilai EKspor & Impor Menurut Jenis Komoditi</th>
                                        </tr>
                                        {{--<tr>
                                            <th colspan="2"></th>
                                            <th colspan="2">Volume (Ton)</th>
                                            <th colspan="2">Nilai (Juta US $)</th>
                                        </tr>--}}
                                        <tr>
                                            {{--{{dd($rek_eksporimpor->groupBy('tahun'))}}--}}
                                            <th colspan="1">NO</th>
                                            <th colspan="1">Jenis Komoditi</th>
                                            <th colspan="1">Jenis Volume</th>
                                            <th colspan="1">Tahun</th>
                                            <th colspan="1">Volume (Ton)</th>
                                            <th colspan="1">Nilai (Juta US $)</th>
                                          {{--  @foreach($rek_eksporimpor->groupBy('tahun') as $tahun => $data)--}}
                                               {{-- <th colspan="1" value="{{$tahun}}">{{$tahun}} </th>--}}
                                          {{--  @endforeach--}}
                                           {{-- @foreach($rek_eksporimpor->groupBy('tahun') as $tahun => $data)--}}
                                                {{--<th colspan="1" value="{{$tahun}}">{{$tahun}} </th>--}}
                                         {{--   @endforeach--}}

                                            @if($user_name == 'Pengaduan' or 'Superadmin')
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                             @else
                                             @endif
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--{{dd($rek_eksporimpor)}}--}}
                                         @foreach($rek_eksporimpor as $r)
                                        <tr>

                                            {{--@foreach($data->where('tahun', $tahun) as $r)--}}
                                                {{--{{dd(count($rek_eksporimpor->groupBy('tahun')))}}--}}
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$r->jenis_komoditi}}</td>
                                            <td>{{$r->jenis_volume}}</td>
                                            <td>{{$r->tahun}}</td>
                                            <td>{{$r->volume}}</td>
                                            <td>{{$r->nilai}}</td>
                                                @if($user_name == 'Pengaduan' or 'Superadmin')
                                            <td>
                                                <form action="{{route('edit.eksporimpor', $r->id)}}">
                                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('delete.eksporimpor', $r->id)}}" method="post">
                                                      @csrf
                                                      @method('DELETE')
                                                    <button class="btn btn-block btn-outline-danger">Hapus</button>
                                                </form>
                                            </td>
                                                @else
                                                @endif
                                            {{--@endforeach--}}
                                        </tr>
                                         @endforeach
                                        <tr class="danger">
                                            <td></td>
                                            <td colspan="1">Total</td>
                                            <td></td>
                                            <td></td>
                                           {{-- <td>{{(sum($rek_eksporimpor->volume))}}</td>--}}
                                            <td>{{$rek_eksporimpor->sum('volume')}}</td>
                                            <td>{{$rek_eksporimpor->sum('nilai')}}</td>
                                        </tr>
                                    </table>
                            </div>


            <div class="ibox-content">
                <div class="ibox-title">
                    <H5>Volume dan Nilai Ekspor Menurut Pelabuhan Muat di Provinsi Jawa Tengah</H5>
                </div>

                {{--<div class="form-group">
                    <form action="{{route('filterpelabuhan')}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label class="col-lg-1 control-label"> Dari Tahun</label>
                            <select class="form-control" name="from_tahun" id="">
                                <option value="" selected>Dari Tahun</option>
                                @foreach($tahunpelabuhan as $tahun)
                                <option value="{{$tahun}}">{{$tahun}} </option>
                                 @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="col-lg-1 control-label">Sampai Tahun</label>
                            <select class="form-control" name="to_tahun" id="tahun">
                                <option value="" selected>Sampai Tahun</option>
                                @foreach($tahunpelabuhan as $tahun)
                                <option value="{{$tahun}}">{{$tahun}} </option>
                                @endforeach

                            </select>
                        </div>
                        --}}{{-- {{dd($r->tahun)}}--}}{{--
                        <div class="col-md-6">
                            <label class="col-lg-12 control-label">Jenis Volume dan Nilai</label>
                            <select class="form-control" name="volume" id="tahun">
                                <option value="" selected>Pilih Ekspor/ Import </option>
                                @foreach($volumepelabuhan as $volume)
                                <option value="{{$volume}}">{{$volume}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="col-lg-12 control-label">Pelabuhan</label>
                            <select class="form-control" name="komoditi" id="tahun">
                                <option value="" selected>Pilih Jenis Komoditi</option>
                                @foreach($pelabuhan as $pelabuh)
                                <option value="{{$pelabuh}}">{{$pelabuh}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="ibox-content">
                            <div class="col-md-6">
                                <button class="btn btn-app btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>--}}
                            <div class="col-md-6">
                                <form action="{{route('export.pelabuhan')}}">

                                     @if(isset($bulan))
                                    <input name="bulanExport" value="{{ $bulan }}" hidden>
                                    @else

                                    @endif
                                    <button class="btn btn-app btn-danger" href="{{route('export.pelabuhan')}}" type="submit">Download</button>
                                </form>
                            </div>


                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="2"></th>
                            <th colspan="4">Volume dan Nilai Ekspor Menurut Pelabuhan Muat</th>
                        </tr>
                       {{-- <tr>
                            <th colspan="2"></th>
                            <th colspan="2">Volume (Ton)</th>
                            <th colspan="2">Nilai (Juta US $)</th>
                        </tr>--}}
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="1">Pelabuhan Muat</th>
                            <th colspan="1">Jenis Volume</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Volume (Ton)</th>
                            <th colspan="1">Nilai (Juta US $)</th>

                            {{-- @if($user_name == 'Pengaduan' or 'Superadmin')--}}
                            <th>Edit</th>
                            <th>Hapus</th>
                            {{-- @else
                             @endif--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rek_pelabuhan as $s)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$s->pelabuhan_muat}}</td>
                                <td>{{$s->jenis_volume}}</td>
                                <td>{{$s->tahun}}</td>
                                <td>{{$s->volume}}</td>
                                <td>{{$s->nilai}}</td>
                                @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.pelabuhan', $s->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.pelabuhan', $s->id)}}" method="post">
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
                            <td></td>
                            <td>{{$rek_pelabuhan->sum('volume')}}</td>
                            <td>{{$rek_pelabuhan->sum('nilai')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ibox float-e-margins">
                 <div class="ibox-title">
                    <H5>Volume dan Nilai Ekspor Menurut Negara Tujuan di Provinsi Jawa Tengah</H5>
                </div>

                {{--<div class="form-group">
                    <form action="{{route('filter')}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label class="col-lg-1 control-label"> Dari Tahun</label>
                            <select class="form-control" name="from_tahun" id="">
                                <option value="" selected>Dari Tahun</option>
                                --}}{{--@foreach($tahuns as $tahun)--}}{{--
                                    <option value="--}}{{--{{$tahun}}--}}{{--">--}}{{--{{$tahun}}--}}{{-- </option>
                               --}}{{-- @endforeach--}}{{--
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="col-lg-1 control-label">Sampai Tahun</label>
                            <select class="form-control" name="to_tahun" id="tahun">
                                <option value="" selected>Sampai Tahun</option>
                                --}}{{--@foreach($tahuns as $tahun)--}}{{--
                                    <option value="--}}{{--{{$tahun}}--}}{{--">--}}{{--{{$tahun}}--}}{{-- </option>
                                --}}{{--@endforeach--}}{{--

                            </select>
                        </div>
                        --}}{{-- {{dd($r->tahun)}}--}}{{--
                        <div class="col-md-6">
                            <label class="col-lg-12 control-label">Jenis Volume dan Nilai</label>
                            <select class="form-control" name="volume" id="tahun">
                                <option value="" selected>Pilih Ekspor/ Import </option>
                                --}}{{--@foreach($volumes as $volume)--}}{{--
                                    <option value="--}}{{--{{$volume}}--}}{{--">--}}{{--{{$volume}}--}}{{-- </option>
                                --}}{{--@endforeach--}}{{--
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="col-lg-12 control-label">Negara Tujuan</label>
                            <select class="form-control" name="komoditi" id="tahun">
                                <option value="" selected>Pilih Jenis Komoditi</option>
                                --}}{{--@foreach($komoditis as $komoditi)--}}{{--
                                    <option value="--}}{{--{{$komoditi}}--}}{{--">--}}{{--{{$komoditi}}--}}{{-- </option>
                                --}}{{--@endforeach--}}{{--
                            </select>
                        </div>
                    </form>
                </div>--}}
                <div class="ibox-content">
                    {{-- <div class="col-md-6">
                         <button class="btn btn-app btn-success" type="submit">Submit</button>
                     </div>--}}

                            <div class="col-md-6">
                                <form action="{{route('export.negara')}}">

                                    {{-- @if(isset($bulan))--}}
                                    <input name="bulanExport" value="{{--{{ $bulan }}--}}" hidden>
                                    {{--@else

                                    @endif--}}
                                    <button class="btn btn-app btn-danger" href="{{route('export.negara')}}" type="submit">Download</button>
                                </form>
                            </div>
                        </div>



                <div class="ibox-content">
                    <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                        <thead>
                        <tr class="active">
                            <th colspan="2"></th>
                            <th colspan="4">Volume dan Nilai Ekspor Menurut Negara Tujuan</th>
                        </tr>
                        {{--<tr>
                            <th colspan="2"></th>
                            <th colspan="2">Volume (Ton)</th>
                            <th colspan="2">Nilai (Juta US $)</th>
                        </tr>--}}
                        <tr>
                            <th colspan="1">NO</th>
                            <th colspan="1">Negara Tujuan</th>
                            <th colspan="1">Jenis Volume</th>
                            <th colspan="1">Tahun</th>
                            <th colspan="1">Volume (Ton)</th>
                            <th colspan="1">Nilai (Juta US $)</th>

                             @if($user_name == 'Pengaduan' or 'Superadmin')
                            <th>Edit</th>
                            <th>Hapus</th>
                             @else
                             @endif
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($rek_negara as $n)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$n->negara_tujuan}}</td>
                            <td>{{$n->jenis_volume}}</td>
                            <td>{{$n->tahun}}</td>
                            <td>{{$n->volume}}</td>
                            <td>{{$n->nilai}}</td>
                              @if($user_name == 'Pengaduan' or 'Superadmin')
                            <td>
                                <form action="{{route('edit.negara', $n->id)}}">
                                    <button class="btn btn-block btn-outline-success">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('delete.negara', $n->id)}}" method="post">
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
                            <td></td>
                            <td>{{$rek_pelabuhan->sum('volume')}}</td>
                            <td>{{$rek_pelabuhan->sum('nilai')}}</td>
                        </tr>
                    </table>
                </div>
            </div>

    </div>

</div>{{-- - - -- - - - -------}}
