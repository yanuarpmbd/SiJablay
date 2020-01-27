@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
    <link href="{{asset('css/content.css')}}" rel="stylesheet">
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .modalDialog {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity:0;
            -webkit-transition: opacity 100ms ease-in;
            -moz-transition: opacity 100ms ease-in;
            transition: opacity 100ms ease-in;
            pointer-events: none;
        }
        .modalDialog:target {
            opacity:1;
            pointer-events: auto;
        }
        .modalDialog > div {
            max-width: 800px;
            width: 90%;
            position: relative;
            margin: 10% auto;
            padding: 20px;
            border-radius: 3px;
            background: #fff;
        }
        .close {
            font-family: Arial, Helvetica, sans-serif;
            background: #f26d7d;
            color: #fff;
            line-height: 25px;
            position: absolute;
            right: -12px;
            text-align: center;
            top: -10px;
            width: 34px;
            height: 34px;
            text-decoration: none;
            font-weight: bold;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
            padding-top: 5px;
        }
        .close:hover {
            background: #fa3f6f;
        }

    </style>
@endsection
@section('content')
    <div class="tengah">
        @if(Auth::user()->id == 7)
            <main>
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Request Nomor</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2">Kategori Nomor</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3">Setting Nomor</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                @include('sekretariat.content.penomoran.request')
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.penomoran.setting-kategori')
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                @include('sekretariat.content.penomoran.setting')
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @elseif(Auth::user()->id == 1)
        <main>
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Request Nomor</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Kategori Nomor</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3">Setting Nomor</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            @include('sekretariat.content.penomoran.request')
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            @include('sekretariat.content.penomoran.setting-kategori')
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body">
                            @include('sekretariat.content.penomoran.setting')
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @else
            <main>
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Request Nomor</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                @include('sekretariat.content.penomoran.request')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-footable/3.1.6/footable.core.js" integrity="sha256-PQ+jsc5fArRdpwTFVK6AMzeRKUUm6nZMfCwp5R0CKqY=" crossorigin="anonymous"></script>
    <script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.footable').footable(
                {
                    calculateWidthOverride: function() {
                        return { width: $(window).width() };
                    }
                }
            );

        });

    </script>

@endsection













