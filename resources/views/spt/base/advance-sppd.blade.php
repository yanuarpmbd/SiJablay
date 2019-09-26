@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="tengah">
        @include('spt.content.advance-sppd-dwnld')
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
            $(".select2_demo_2").select2({
                placeholder: "Pilih Jenis Perjalanan...",
            });
            $(".select2_demo_3").select2({
                placeholder: "Pilih ...",
                allowClear: true,
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
@endsection
