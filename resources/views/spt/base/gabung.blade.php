@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
    <style>
        .doc-title {
            text-align: center;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 2rem 0;
            margin: 5rem 0 2rem;
            text-transform: uppercase;
        }
    </style>
@endsection

@section('content')

    <div class="tengah">

        <main>
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Buat SPT</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Rekap SPT</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3">SPT Terhapus</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            @include('spt.content.spt')
                        </div>
                    </div>


                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            @include('spt.content.rekap-spt')
                        </div>
                    </div>


                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body">
                            @include('spt.content.spt_terhapus')
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
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/pages/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    {{--DATEPICKER--}}
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
    <script src="{{asset('js/table/js/jquery.table2excel.js')}}"></script>
    <script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>

    <script src="{{asset('js/mdb.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>

    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>

    <script>
        document.getElementById('addPlayer').onclick = function createInputField() {
            var input = document.createElement('input');
            var lineBreak = document.createElement('br');
            var testId = "tujuan";
            var i = 0;
            var x = document.getElementsByTagName('INPUT').length - 2;
            for (i = 0; i < x; i++) {
                i;
            }
            input.setAttribute('id', testId + i);
            input.className = 'form-control';
            input.name = 'tujuan[]';
            input.placeholder = 'Tujuan Lain';
            var aplayer1 = document.getElementById('input-player-list');
            aplayer1.appendChild(input);
            aplayer1.appendChild(lineBreak);
        }

        document.getElementById('removePlayer').onclick = function removeInputField() {

            var x = document.getElementsByTagName('INPUT').length;
            console.log(x);
            if ( x > 2 ) {
                $('#input-player-list input:last').remove();
                $('#input-player-list br:last').remove();
                return false;
            } else {
            }
        }
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
            document.getElementById('table2').style.visibility = 'visible';//shows the table
            return false; //tells the form not to actaully load the action page
        }
    </script>
@endsection
