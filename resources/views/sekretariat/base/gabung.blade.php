@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
    <link href="{{asset('css/content.css')}}" rel="stylesheet">

@endsection
@section('content')
    <div class="tengah">
        @if($user == 7 or 1)
            <main>
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Kepala Dinas</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2">PLH Kepala Dinas</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3">Daftar Rekening</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4">User</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5">Perjalanan Dinas</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-6">RKO</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-7">Rekap RKO</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-8">Target Realisasi RKO</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-9">Rekap Target Realisasi</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-10">Rekap Target RKO</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-11">Sub Kegiatan</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-12">Rekap Sub Kegiatan</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                @include('sekretariat.content.plt')
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.plh')

                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.add-rek')
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">
                                @include('setBidang.content.edit')
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                            <div class="panel-body">
                                @include('setBidang.content.set-no')
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.rko')
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.rek-rko')
                            </div>
                        </div>
                        <div id="tab-8" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.target-realisasi-rko')
                            </div>
                        </div>
                        <div id="tab-9" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.rekap-target')
                            </div>
                        </div>
                        <div id="tab-10" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.rekap-rko')
                            </div>
                        </div>
                        <div id="tab-11" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.sub-kegiatan')
                            </div>
                        </div>
                        <div id="tab-12" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.rekap-sub-kegiatan')
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @else
            Ga boleeh
        @endif
    </div>
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/pages/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    {{--DATEPICKER--}}
    <script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script>
        $(document).ready(function () {


            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });

            $('#data_1 .input-group.date').datepicker({
                changeMonth: true,
                changeYear: true,
                startView: "months",
                minViewMode: "months",
                showButtonPanel: true,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "yyyy-mm"
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
    <script src="{{asset('js/table/js/jquery.table2excel.js')}}"></script>
    <script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>

    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script>

        $('#article-ckeditor').wysiwyg();

        $('#submit-notulen').on('click',function(){

            console.log($('#editor').html());

        });
    </script>
@endsection













