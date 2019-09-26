@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.bootstrap.css')}}" rel="stylesheet">
    <style>
        .btn-trans {
            background-color: transparent;
            border-color: transparent;
        }
    </style>
@endsection
@section('content')
    <div class="tengah">
        <main>
            <div class="tabs-container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if(session()->has('bad'))
                    <div class="alert alert-danger alert-block">
                        {{ session()->get('bad') }}
                    </div>
                @endif
                <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Data ASN</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Data Presensi ASN</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            @include('all.content.data-asn')
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            @include('all.content.presensi')
                        </div>
                     </div>
                </div>
            </div>
            </div>
        </main>
    </div>
@endsection
@section('js')
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/pages/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('js/table/js/jquery.table2excel.js')}}"></script>
    <script src="{{asset('js/plugins/footable/footable.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script>
        $(document).ready(function () {


            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Pilih Nama...",
                allowClear: true,
                minimumInputLength:3,
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
    <script>
        $(document).ready(function() {
            jQuery(function($){
                $('.footable').footable({
                    "columns": [{
                        "type": "text"
                    },{
                        "type": "html"
                    }]
                });
            });
        });
    </script>
    <script type="text/javascript">
        window.onload()=function() {
            document.getElementById("data_2").submit();
        }
    </script>
    <script>
        $('#data_4 .input-group.date').datepicker({
            viewMode: "months",
            minViewMode: "months",
            keyboardNavigation: false,
            calendarYears: false,
            forceParse: false,
            forceParse: false,
            autoclose: true,
            format: "mm"
        });
    </script>
    <script>
        $('#data_5 .input-group.date').datepicker({
            viewMode: "years",
            minViewMode: "years",
            format: "yyyy"
        });
    </script>

    <script>
        var $rows = $('#tablel tr');
        $('#myInput').keyup(debounce(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        }, 300));

        function debounce(func, wait, immediate) {
            var timeout;
            return function() {
                var context = this, args = arguments;
                var later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };
    </script>
    <script>
        function showTable()
        {
            document.getElementById('tablel').style.visibility = 'visible';//shows the table
            return false; //tells the form not to actaully load the action page
        }
    </script>

@endsection
