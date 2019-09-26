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
                    <h5>Presensi Pegawai</h5>
                </div>
                <div class="ibox-content">
                    <form autocomplete="off" action="{{route('get.presensi')}}">
                        <div class="form-group" id="data_5">
                            <label class="font-normal">Tahun</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="tahun" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" id="data_4">
                            <label class="font-normal">Bulan</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="bulan" class="form-control">
                            </div>
                        </div>
                           {{-- <label class="col-lg-12 control-label">Nama Pegawai</label>
                            <div class="col-md-12">
                                <select class="select2_demo_3 form-control" name="nama_peg" id="nama_peg">
                                    @foreach($decode2 as $d)
                                        <option value=""></option>
                                        <option value="{{$d->nip}}">{{$d->nama}}</option>
                                    @endforeach
                                </select>
                            </div>--}}
                            <div class="form-group">
                                <button class="btn btn-sm btn-white" type="submit" id="show">Submit</button>
                            </div>
                            </form>
                            <table class="footable" id="tablel" data-paging="true" data-sorting="true" data-show-toggle="true" data-filtering="true">
                                <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>KWK</th>
                                    <th>Alpha</th>
                                    <th data-breakpoints="all">Absen Masuk 01</th>
                                    <th data-breakpoints="all">Absen Pulang 01</th>
                                    <th data-breakpoints="all">Status 01</th>
                                    <th data-breakpoints="all">Absen Masuk 02</th>
                                    <th data-breakpoints="all">Absen Pulang 02</th>
                                    <th data-breakpoints="all">Status 02</th>
                                    <th data-breakpoints="all">Absen Masuk 03</th>
                                    <th data-breakpoints="all">Absen Pulang 03</th>
                                    <th data-breakpoints="all">Status 03</th>
                                    <th data-breakpoints="all">Absen Masuk 04</th>
                                    <th data-breakpoints="all">Absen Pulang 04</th>
                                    <th data-breakpoints="all">Status 04</th>
                                    <th data-breakpoints="all">Absen Masuk 05</th>
                                    <th data-breakpoints="all">Absen Pulang 05</th>
                                    <th data-breakpoints="all">Status 05</th>
                                    <th data-breakpoints="all">Absen Masuk 06</th>
                                    <th data-breakpoints="all">Absen Pulang 06</th>
                                    <th data-breakpoints="all">Status 06</th>
                                    <th data-breakpoints="all">Absen Masuk 07</th>
                                    <th data-breakpoints="all">Absen Pulang 07</th>
                                    <th data-breakpoints="all">Status 07</th>
                                    <th data-breakpoints="all">Absen Masuk 08</th>
                                    <th data-breakpoints="all">Absen Pulang 08</th>
                                    <th data-breakpoints="all">Status 08</th>
                                    <th data-breakpoints="all">Absen Masuk 09</th>
                                    <th data-breakpoints="all">Absen Pulang 09</th>
                                    <th data-breakpoints="all">Status 09</th>
                                    <th data-breakpoints="all">Absen Masuk 10</th>
                                    <th data-breakpoints="all">Absen Pulang 10</th>
                                    <th data-breakpoints="all">Status 10</th>
                                    <th data-breakpoints="all">Absen Masuk 11</th>
                                    <th data-breakpoints="all">Absen Pulang 11</th>
                                    <th data-breakpoints="all">Status 11</th>
                                    <th data-breakpoints="all">Absen Masuk 12</th>
                                    <th data-breakpoints="all">Absen Pulang 12</th>
                                    <th data-breakpoints="all">Status 12</th>
                                    <th data-breakpoints="all">Absen Masuk 13</th>
                                    <th data-breakpoints="all">Absen Pulang 13</th>
                                    <th data-breakpoints="all">Status 13</th>
                                    <th data-breakpoints="all">Absen Masuk 13</th>
                                    <th data-breakpoints="all">Absen Pulang 13</th>
                                    <th data-breakpoints="all">Status 13</th>
                                    <th data-breakpoints="all">Absen Masuk 14</th>
                                    <th data-breakpoints="all">Absen Pulang 14</th>
                                    <th data-breakpoints="all">Status 14</th>
                                    <th data-breakpoints="all">Absen Masuk 15</th>
                                    <th data-breakpoints="all">Absen Pulang 15</th>
                                    <th data-breakpoints="all">Status 15</th>
                                    <th data-breakpoints="all">Absen Masuk 16</th>
                                    <th data-breakpoints="all">Absen Pulang 16</th>
                                    <th data-breakpoints="all">Status 16</th>
                                    <th data-breakpoints="all">Absen Masuk 17</th>
                                    <th data-breakpoints="all">Absen Pulang 17</th>
                                    <th data-breakpoints="all">Status 17</th>
                                    <th data-breakpoints="all">Absen Masuk 18</th>
                                    <th data-breakpoints="all">Absen Pulang 18</th>
                                    <th data-breakpoints="all">Status 18</th>
                                    <th data-breakpoints="all">Absen Masuk 19</th>
                                    <th data-breakpoints="all">Absen Pulang 19</th>
                                    <th data-breakpoints="all">Status 19</th>
                                    <th data-breakpoints="all">Absen Masuk 20</th>
                                    <th data-breakpoints="all">Absen Pulang 20</th>
                                    <th data-breakpoints="all">Status 20</th>
                                    <th data-breakpoints="all">Absen Masuk 21</th>
                                    <th data-breakpoints="all">Absen Pulang 21</th>
                                    <th data-breakpoints="all">Status 21</th>
                                    <th data-breakpoints="all">Absen Masuk 22</th>
                                    <th data-breakpoints="all">Absen Pulang 22</th>
                                    <th data-breakpoints="all">Status 22</th>
                                    <th data-breakpoints="all">Absen Masuk 23</th>
                                    <th data-breakpoints="all">Absen Pulang 23</th>
                                    <th data-breakpoints="all">Status 23</th>
                                    <th data-breakpoints="all">Absen Masuk 24</th>
                                    <th data-breakpoints="all">Absen Pulang 24</th>
                                    <th data-breakpoints="all">Status 24</th>
                                    <th data-breakpoints="all">Absen Masuk 25</th>
                                    <th data-breakpoints="all">Absen Pulang 25</th>
                                    <th data-breakpoints="all">Status 25</th>
                                    <th data-breakpoints="all">Absen Masuk 26</th>
                                    <th data-breakpoints="all">Absen Pulang 26</th>
                                    <th data-breakpoints="all">Status 26</th>
                                    <th data-breakpoints="all">Absen Masuk 27</th>
                                    <th data-breakpoints="all">Absen Pulang 27</th>
                                    <th data-breakpoints="all">Status 27</th>
                                    <th data-breakpoints="all">Absen Masuk 28</th>
                                    <th data-breakpoints="all">Absen Pulang 28</th>
                                    <th data-breakpoints="all">Status 28</th>
                                    <th data-breakpoints="all">Absen Masuk 29</th>
                                    <th data-breakpoints="all">Absen Pulang 29</th>
                                    <th data-breakpoints="all">Status 29</th>
                                    <th data-breakpoints="all">Absen Masuk 30</th>
                                    <th data-breakpoints="all">Absen Pulang 30</th>
                                    <th data-breakpoints="all">Status 30</th>
                                    <th data-breakpoints="all">Absen Masuk 31</th>
                                    <th data-breakpoints="all">Absen Pulang 31</th>
                                    <th data-breakpoints="all">Status 31</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($decode2 as $de)
                                        <tr>
                                            <td>{{$de->nip}}</td>
                                            <td>{{$de->nama}}</td>
                                            <td>{{$de->kwk}}</td>
                                            <td>{{$de->alpha}}</td>
                                            <td>{{$de->am_01}}</td>
                                            <td>{{$de->ap_01}}</td>
                                            <td>{{$de->s_01}}</td>
                                            <td>{{$de->am_02}}</td>
                                            <td>{{$de->ap_02}}</td>
                                            <td>{{$de->s_02}}</td>
                                            <td>{{$de->am_03}}</td>
                                            <td>{{$de->ap_03}}</td>
                                            <td>{{$de->s_03}}</td>
                                            <td>{{$de->am_04}}</td>
                                            <td>{{$de->ap_04}}</td>
                                            <td>{{$de->s_04}}</td>
                                            <td>{{$de->am_05}}</td>
                                            <td>{{$de->ap_05}}</td>
                                            <td>{{$de->s_05}}</td>
                                            <td>{{$de->am_06}}</td>
                                            <td>{{$de->ap_06}}</td>
                                            <td>{{$de->s_06}}</td>
                                            <td>{{$de->am_07}}</td>
                                            <td>{{$de->ap_07}}</td>
                                            <td>{{$de->s_07}}</td>
                                            <td>{{$de->am_08}}</td>
                                            <td>{{$de->ap_08}}</td>
                                            <td>{{$de->s_08}}</td>
                                            <td>{{$de->am_09}}</td>
                                            <td>{{$de->ap_09}}</td>
                                            <td>{{$de->s_09}}</td>
                                            <td>{{$de->am_10}}</td>
                                            <td>{{$de->ap_10}}</td>
                                            <td>{{$de->s_10}}</td>
                                            <td>{{$de->am_11}}</td>
                                            <td>{{$de->ap_11}}</td>
                                            <td>{{$de->s_11}}</td>
                                            <td>{{$de->am_12}}</td>
                                            <td>{{$de->ap_12}}</td>
                                            <td>{{$de->s_12}}</td>
                                            <td>{{$de->am_13}}</td>
                                            <td>{{$de->ap_13}}</td>
                                            <td>{{$de->s_13}}</td>
                                            <td>{{$de->am_14}}</td>
                                            <td>{{$de->ap_14}}</td>
                                            <td>{{$de->s_14}}</td>
                                            <td>{{$de->am_15}}</td>
                                            <td>{{$de->ap_15}}</td>
                                            <td>{{$de->s_15}}</td>
                                            <td>{{$de->am_16}}</td>
                                            <td>{{$de->ap_16}}</td>
                                            <td>{{$de->s_16}}</td>
                                            <td>{{$de->am_17}}</td>
                                            <td>{{$de->ap_17}}</td>
                                            <td>{{$de->s_17}}</td>
                                            <td>{{$de->am_18}}</td>
                                            <td>{{$de->ap_18}}</td>
                                            <td>{{$de->s_18}}</td>
                                            <td>{{$de->am_19}}</td>
                                            <td>{{$de->ap_19}}</td>
                                            <td>{{$de->s_19}}</td>
                                            <td>{{$de->am_20}}</td>
                                            <td>{{$de->ap_20}}</td>
                                            <td>{{$de->s_20}}</td>
                                            <td>{{$de->am_21}}</td>
                                            <td>{{$de->ap_21}}</td>
                                            <td>{{$de->s_21}}</td>
                                            <td>{{$de->am_22}}</td>
                                            <td>{{$de->ap_22}}</td>
                                            <td>{{$de->s_22}}</td>
                                            <td>{{$de->am_23}}</td>
                                            <td>{{$de->ap_23}}</td>
                                            <td>{{$de->s_23}}</td>
                                            <td>{{$de->am_24}}</td>
                                            <td>{{$de->ap_24}}</td>
                                            <td>{{$de->s_24}}</td>
                                            <td>{{$de->am_25}}</td>
                                            <td>{{$de->ap_25}}</td>
                                            <td>{{$de->s_25}}</td>
                                            <td>{{$de->am_26}}</td>
                                            <td>{{$de->ap_26}}</td>
                                            <td>{{$de->s_26}}</td>
                                            <td>{{$de->am_27}}</td>
                                            <td>{{$de->ap_27}}</td>
                                            <td>{{$de->s_27}}</td>
                                            <td>{{$de->am_28}}</td>
                                            <td>{{$de->ap_28}}</td>
                                            <td>{{$de->s_28}}</td>
                                            <td>{{$de->am_29}}</td>
                                            <td>{{$de->ap_29}}</td>
                                            <td>{{$de->s_29}}</td>
                                            <td>{{$de->am_30}}</td>
                                            <td>{{$de->ap_30}}</td>
                                            <td>{{$de->s_30}}</td>
                                            <td>{{$de->am_31}}</td>
                                            <td>{{$de->ap_31}}</td>
                                            <td>{{$de->s_31}}</td>
                                        </tr>
                                    @endforeach
                                   {{-- {{ $decode2->links() }}--}}
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
            </div>
    </div>
</div>
