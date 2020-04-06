<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIJABLAY | DPMPTSP PROV JATENG</title>
    <meta name="description" content="A free and modern UI toolkit for web makers based on the popular Bootstrap 4 framework.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" value="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/pages/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link href="{{asset('css/content.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">--}}
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400);
        form{
            margin: 20px 0;
        }
        form input, button{
            padding: 5px;
        }
        table{
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid #cdcdcd;
        }
        table th, table td{
            padding: 10px;
            text-align: center;
        }
        .footer #button{

            width:50px;
            height:50px;
            border: #f7082d 12px solid;
            border-radius:35px;
            margin:0 auto;
            position:relative;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
        }
        .footer #button:hover{
            width:50px;
            height:50px;
            border: #91061a 12px solid;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
            position:relative;
        }
        .footer {
            background: transparent !important;
            background-repeat: repeat !important;
            background-attachment: scroll !important;
            border-top : none !important;
            bottom:0;
            left:0;
            position:fixed;
            width: 100%;
            height: 2em;
            overflow:hidden;
            margin:0 auto;
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
            z-index:999;
        }
        .footer:hover {
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -o-transition: all 1s ease;
            -ms-transition: all 1s ease;
            transition: all 1s ease;
            height: 10em;
        }
        .footer #container{
            margin-top:auto;
            width:100%;
            height:100%;
            position:relative;
            top:0;
            left:0;
            background: transparent;
        }
        .footer #cont{
            position:relative;
            top:-45px;
            right:190px;
            width:150px;
            height:auto;
            margin:0 auto;
        }
        .footer_center{
            width:500px;
            float:left;
            text-align:center;
        }
        .footer h3{
            font-family: 'Helvetica';
            font-size: 15px;
            font-weight: 100;
            margin-top:70px;
            margin-left:40px;
        }
        #myInput {
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
        }
    </style>
    @yield('css')

</head>
<body>
<header class="header">

    @if(Auth::user())
    @include('layouts.menu')
    @endif

    @yield('content')


</header>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

{{--<div class="footer">
    <div id="button"></div>
    <div id="container">
        <div id="cont">
            <div class="footer_center">
                <h3>SIJABLAY | DPMPTSP Propengsi Jawa Tengah</h3>
            </div>
        </div>
    </div>
</div>--}}


@yield('js')
{{--<script>
    console.log('test');
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    console.log('test');
    Highcharts.chart('chartTabulasi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares in January, 2018'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Chrome',
                y: 61.41,
                sliced: true,
                selected: true
            }, {
                name: 'Internet Explorer',
                y: 11.84
            }, {
                name: 'Firefox',
                y: 10.85
            }, {
                name: 'Edge',
                y: 4.67
            }, {
                name: 'Safari',
                y: 4.18
            }, {
                name: 'Sogou Explorer',
                y: 1.64
            }, {
                name: 'Opera',
                y: 1.6
            }, {
                name: 'QQ',
                y: 1.2
            }, {
                name: 'Other',
                y: 2.61
            }]
        }]
    });
</script>--}}
<script>

    $(function() {
        $(".navigation__icon").click(function() {
            $(".navigation").toggleClass('navigation-open');
        });
    });

</script>
<script>
    @isset($kategoris)
    @foreach($kategoris as $kategori)
    @if($kategori->nama_kategori == 'SPT')

    @else
    function {{str_replace(' ', '', (strtolower($kategori->nama_kategori)))}}() {
        var x = document.getElementById("{{str_replace(' ', '', (strtolower($kategori->nama_kategori)))}}");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    @endif
    @endforeach
    @endisset

    function addKategori() {
        var x = document.getElementById("addKategori");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function addSetting() {
        var x = document.getElementById("addSetting");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

<script>
    document.getElementById('addSubKeg').onclick = function createInputField() {
        var input = document.createElement('input');
        var input2 = document.createElement('input');
        var input3 = document.createElement('input');
        var lineBreak = document.createElement('br');
        var testId = "nama_sub_keg";
        var i = 0;
        var x = document.getElementsByTagName('INPUT').length - 2;
        var col8 = document.createElement('div');
        col8.className ='col-4';
        var col4 = document.createElement('div');
        col4.className ='col-4';
        input.setAttribute('id', testId + i);
        input.className = 'form-control';
        input.name = 'nama_sub_keg[]';
        input.placeholder = 'Sub Kegiatan';
        input2.setAttribute('id', testId + i);
        input2.className = 'form-control';
        input2.name = 'jml_anggaran_sub[]';
        input2.placeholder = 'Anggaran';
        input3.setAttribute('id', testId + i);
        input3.className = 'form-control';
        input3.name = 'tager_sub[]';
        input3.placeholder = 'Target fisik';
        for (i = 0; i < x; i++) {
            i;
            var aplayer1 = document.getElementById('input-player-list');

            aplayer1.appendChild(col8);
            aplayer1.appendChild(input);
            aplayer1.appendChild(col4);
            aplayer1.appendChild(input2);
            aplayer1.appendChild(col4);
            aplayer1.appendChild(input3);
            aplayer1.appendChild(lineBreak);
        }



    }

    document.getElementById('removeSubKeg').onclick = function removeInputField() {

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
</body>
</html>
