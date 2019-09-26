<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIJABLAY | DPMPTSP PROV JATENG</title>
    <meta name="description" content="A free and modern UI toolkit for web makers based on the popular Bootstrap 4 framework.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/shards.css')}}">
    <link rel="stylesheet" href="{{asset('css/shards-demo.css')}}">
    <link rel="stylesheet" href="{{asset('css/me.css')}}">
    @yield('css')
</head>

<body>
<div class="loader">
    <div class="page-loader"></div>
</div>


    @yield('landing')


<!-- Page Content -->

    @yield('page-content')


<script async defer src="{{asset('js/new/buttons.js')}}"></script>
<script async src="{{asset('js/new/widgets.js')}}" charset="utf-8"></script>
<script src="{{asset('js/new/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/new/popper.min.js')}}"></script>
<script src="{{asset('js/new/bootstrap.min.js')}}"></script>
<script src="{{asset('js/new/shards.min')}}.js"></script>
<script src="{{asset('js/new/demo.min.js')}}"></script>

    @yield('js')

</body>

</html>
