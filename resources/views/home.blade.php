@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
    <style>
        .btn-trans {
            background-color: transparent;
            border-color: transparent;
        }

        .type span {
            display: block;
        }

        .type {
            width: 500px;
            height: 50px;
            margin: 50px auto;
            text-align: center;
            color: #fff0ff;
            line-height: 0.85;
            font-family: Tahoma, Geneva, sans-serif;
            font-weight: bold;
        }

        .type span:nth-child(1) {
            font-size: 50px;
        }

        .type span:nth-child(2) {
            font-family: 'Pacifico', cursive;
            font-weight: 400;
            font-size: 40px;
            position: relative;
            z-index: 1;
            text-shadow: 3px 0 0 #fff,
            -2px 0 0 #fff,
            0 2px 0 #fff,
            0 -2px 0 #fff,
            1px 1px #fff,
            -1px -1px 0 #fff,
            1px -1px 0 #fff,
            -1px 1px 0 #fff;
            -webkit-transform: rotate(-3deg);
            transform: rotate(-3deg);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            color: #20a5ff;
            margin-top: -5px;
        }

        .type span:nth-child(3) {
            font-size: 150px;
            margin-top: -12px;
        }

        div.fixed {
            position: fixed;
            top: 0;
            padding-right: 50%;
            padding-left: 50%;
            width: 300px;
        }
        .vibrate-1 {
            -webkit-animation: vibrate-1 0.3s linear infinite both;
            animation: vibrate-1 0.3s linear infinite both;
        }

        @-webkit-keyframes vibrate-1 {
            0% {
                -webkit-transform: translate(0);
                transform: translate(0);
            }
            20% {
                -webkit-transform: translate(-2px, 2px);
                transform: translate(-2px, 2px);
            }
            40% {
                -webkit-transform: translate(-2px, -2px);
                transform: translate(-2px, -2px);
            }
            60% {
                -webkit-transform: translate(2px, 2px);
                transform: translate(2px, 2px);
            }
            80% {
                -webkit-transform: translate(2px, -2px);
                transform: translate(2px, -2px);
            }
            100% {
                -webkit-transform: translate(0);
                transform: translate(0);
            }
        }
        @keyframes vibrate-1 {
            0% {
                -webkit-transform: translate(0);
                transform: translate(0);
            }
            20% {
                -webkit-transform: translate(-2px, 2px);
                transform: translate(-2px, 2px);
            }
            40% {
                -webkit-transform: translate(-2px, -2px);
                transform: translate(-2px, -2px);
            }
            60% {
                -webkit-transform: translate(2px, 2px);
                transform: translate(2px, 2px);
            }
            80% {
                -webkit-transform: translate(2px, -2px);
                transform: translate(2px, -2px);
            }
            100% {
                -webkit-transform: translate(0);
                transform: translate(0);
            }
        }

    </style>
@endsection
@section('content')

<div class="tengah">

<div class="type vibrate-1">
    <span>WELCOME</span>
    <span>Admin {{$user}}</span>
</div>

@if(Auth::user()->username == 'kadis_dpmptsp')
    <main>
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
                        <h5>DATA KEGIATAN MINGGUAN DPMPTSP</h5>

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="footable table table-stripped toggle-arrow-tiny">
                            <thead>
                            <tr>
                                <th data-toggle="true">Detail Kegiatan</th>
                                <th>Tempat</th>
                                <th>Peserta</th>
                                <th data-hide="all">Seksi</th>
                                <th data-hide="all">Program Kerja</th>
                                <th data-hide="all">Tanggal</th>
                                <th data-hide="all">Mulai Pukul</th>
                                <th data-hide="all">Selesai Pukul</th>
                                <th>Bidang</th>
                                <th>Benturan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                        <tbody>

                            @if(count($keg) == 0)
                                <tr>
                                    <td>
                                        Belum Ada Kegiatan
                                    </td>
                                </tr>

                            @else

                                @foreach($keg as $s)
                                    {{--<form action="{{route('terpilih.kegiatan', $s->id)}}">
                                        @method('PATCH')
                                        @csrf--}}
                                        <tr>
                                            <td>{{$s->nama_kegiatan}}
                                                {{--<input type="text" hidden value="{{$s->nama_kegiatan}}">--}}
                                            </td>
                                            <td>{{$s->tempat}}
                                                {{--<input type="text" hidden value="{{$s->tempat}}">--}}
                                            </td>
                                            <td>{{$s->peserta}}
                                                {{--<input type="text" hidden value="{{$s->pesrta}}">--}}
                                            </td>
                                            <td>{{$s->seksi}}
                                                {{--<input type="text" hidden value="{{$s->seksi}}">--}}
                                            </td>
                                            <td>{{$s->program_kerja}}
                                                {{--<input type="text" hidden value="{{$s->program_kerja}}">--}}
                                            </td>
                                            <td>{{Carbon\Carbon::parse($s->tanggal)->formatLocalized('%A, %d %B %Y')}}
                                                {{--<input type="text" hidden value="{{$s->tanggal}}">--}}
                                            </td>
                                            <td>{{$s->pukul_mulai}}
                                                {{--<input type="text" hidden value="{{$s->pukul_mulai}}">--}}
                                            </td>
                                            <td>{{$s->pukul_selesai}}
                                                {{--<input type="text" hidden value="{{$s->selesai}}">--}}
                                            </td>
                                            <td>
                                                {{$s->bidang_id}}
                                               {{-- <input type="text" hidden value="{{$s->bidang_id}}">--}}
                                            </td>
                                            <td>
                                                @if($s->crash == null)
                                                    <span><i class="fa fa-check-square"
                                                             style="color: greenyellow;font-size: 25px"></i></span>
                                                    @elseif($s->crash == "ganti")
                                                    <span style="color: #0b51c5"><strong>Pesan Penggantian Tersampaikan</strong></span>
                                                @else
                                                    <span><i class="fa fa-warning"
                                                             style="color: red;font-size: 25px"></i></span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($s->crash == "ganti")
                                                    -
                                                    @else
                                                    <a href="{{route('pilih.kegiatan', $s->id)}}">
                                                        <button class="btn-rounded btn-outline-success" style="padding: 5px"><i class="fa fa-arrow-circle-o-right" style="color: darkgreen;">Pilih</i></button>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>

                                        @if(count($keg) == 0)
                                            @break
                                            <button class="btn btn-block">test</button>
                                        @endif

                                    {{--</form>--}}
                                @endforeach


                            @endif


                            </tbody>

                        </table>
                        {{$keg->links()}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endif

@if(count($keg_crash) == 0)

    @else
        <main>
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
                            <h5>Edit Segera Kegiatan Anda</h5>

                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <table class="footable table table-stripped toggle-arrow-tiny">
                                <thead>
                                <tr>
                                    <th data-toggle="true">Detail Kegiatan</th>
                                    <th>Tempat</th>
                                    <th>Peserta</th>
                                    <th data-hide="all">Seksi</th>
                                    <th data-hide="all">Program Kerja</th>
                                    <th data-hide="all">Tanggal</th>
                                    <th data-hide="all">Mulai Pukul</th>
                                    <th data-hide="all">Selesai Pukul</th>
                                    <th>Bidang</th>
                                    <th>Pesan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($keg_crash as $s)
                                        <tr>
                                            <td>
                                                {{$s->keg->nama_kegiatan}}
                                            </td>
                                            <td>
                                                {{$s->keg->tempat}}
                                            </td>
                                            <td>
                                                {{$s->keg->peserta}}
                                            </td>
                                            <td>
                                                {{$s->keg->seksi}}
                                            </td>
                                            <td>
                                                {{$s->keg->program_kerja}}
                                            </td>
                                            <td>
                                                {{Carbon\Carbon::parse($s->keg->tanggal)->formatLocalized('%A, %d %B %Y')}}
                                            </td>
                                            <td>
                                                {{$s->keg->pukul_mulai}}
                                            </td>
                                            <td>
                                                {{$s->keg->pukul_selesai}}
                                            </td>
                                            <td>
                                                {{$s->keg->bidang_id}}
                                            </td>
                                            <td>
                                                {{$s->pesan}}
                                            </td>
                                            <td>
                                                    <a href="{{route('edit.kegiatan', $s->keg->id)}}">
                                                        <button class="btn-rounded btn-outline-warning" style="padding: 5px"><i class="fa fa-arrow-circle-o-right" style="color: darkorange;">Edit</i></button>
                                                    </a>
                                            </td>
                                        </tr>

                                    @endforeach



                                </tbody>

                            </table>
                            {{$keg->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endif
</div>


@endsection
@section('js')
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/pages/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
    <script>
        $(document).ready(function () {


            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "yyyy-mm-dd"
            });


            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options: lineOptions});

        });
    </script>
    <script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".pilih").click(function(){
                $("#pilih").prop("checked", true);
                $("#tolak").prop("checked", false);
            });
            $(".tolak").click(function(){
                $("#tolak").prop("checked", true);
                $("#pilih").prop("checked", false);
            });
        });
    </script>

@endsection


