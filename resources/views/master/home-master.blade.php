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
<script>

    $(function() {
        $(".navigation__icon").click(function() {
            $(".navigation").toggleClass('navigation-open');
        });
    });

</script>

</body>
</html>
