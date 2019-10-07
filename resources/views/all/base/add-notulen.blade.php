@extends('master.home-master')
@section('css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="{{asset('css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/footable/footable.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/clockpicker/clockpicker.css')}}" rel="stylesheet">
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
                @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @include('all.content.notulen')
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
    <script src="{{asset('js/plugins/clockpicker/clockpicker.js')}}"></script>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $(".add-row").click(function(){
                var nama = ("");
                var instansi = ("");
                var jabatan =("");
                var ttd = ("");
                var markup = "<tr><td>" + nama + "</td><td>" + instansi + "</td><td>" + jabatan + "</td><td>" + ttd + "</td></tr>";
                $("table tbody").append(markup);
            });
            // Find and remove selected table rows
            $(".delete-row").click(function(){
                $("table tbody").find('input[nama="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
        });
    </script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/css" src="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $("#exportButton").click(function () {
                // parse the HTML table element having an id=exportTable
                var dataSource = shield.DataSource.create({
                    data: "#tblAbsen",
                    schema: {
                        type: "table",
                        fields: {
                            nama: { type: String },
                            instansi: { type: String },
                            ttd: { type: String }
                        }
                    }
                });

                // when parsing is done, export the data to PDF
                dataSource.read().then(function (data) {
                    var pdf = new shield.exp.PDFDocument({
                        author: "SiJablay DPMPTSP Jateng",
                        created: new Date()
                    });

                    pdf.addPage("a4", "portrait");

                    pdf.table(
                        50,
                        50,
                        data,
                        [
                            { field: "Nama", title: "Nama", width: 150},
                            { field: "Asal Instansi", title: "Asal Instansi", width: 150 },
                            { field: "Jabatan", title: "Jabatan", width: 100 },
                            { field: "TTD", title: "Tanda Tangan", width: 100 }
                        ],
                        {
                            margins: {
                                top: 100,
                                left: 50
                            }
                        }
                    );
                    pdf.saveAs({
                        fileName: "Absen"
                    });
                });
            });
        });
    </script>
@endsection

