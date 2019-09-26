

@extends('master.fe-master')

@section('css')
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/bootstrap.css')}}">
@endsection

@section('page-content')
    <div class="page-content">
        <!-- Content -->
    @yield('content')


    @yield('navbars')
    <!-- Navbars -->


    @yield('footer')
    <!-- Footer CTA -->

    </div>
@endsection
