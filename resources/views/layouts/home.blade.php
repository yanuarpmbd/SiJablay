@extends('master.fe-master')

@section('landing')
    <img src="{{asset('img/demo/home.png')}}" alt="DPMPTSP Prov Jateng" class="shard">

    <!-- Welcome Section -->
    <div class="welcome d-flex justify-content-center flex-column">
        <div class="inner-wrapper mt-auto mb-auto">
            <h1 class="slide-in">SIJABLAY</h1>
            <p class="slide-in">DPMPTSP PROVINSI JAWA TENGAH</p>
            <div class="action-links slide-in">
                <a href="{{route('login')}}" class="btn btn-primary btn-pill align-self-center mr-2">
                    <i class="fa fa-sign-in mr-1"></i> Log In</a>
                <a href="{{route('get.kegiatan')}}" class="btn btn-outline-light btn-pill align-self-center">Explore</a>
            </div>
        </div>
        <div class="product-by">
            <a href="https://dpmptsp.jatengprov.go.id" target="_blank">
                <p>A Product By</p>
                <img src="{{asset('img/demo/logo.png')}}" style="max-width: 2%" alt="DPMPTSP Prov Jateng">
                <p>DPMPTSP Prov Jateng @2018</p>
            </a>
        </div>
    </div>
@endsection


