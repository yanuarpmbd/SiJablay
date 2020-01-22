<nav class="navigation">

    <section class="logo"></section>

    <section class="navigation__icon">
        <span class="topBar"></span>
        <span class="middleBar"></span>
        <span class="bottomBar"></span>
    </section>

    <ul class="navigation__ul">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('gabung.kegiatan')}}">Kegiatan</a></li>
        <li><a href="{{route('gabung.notulen')}}">Notulen</a></li>
        <li><a href="{{route('show.setting-nomor')}}">Ambil Nomor</a></li>
        <li><a href="{{route('form.spt')}}">Perjalanan Dinas</a></li>
        <li><a href="{{route('gabung.bidang')}}">Data Internal DPMPTSP</a></li>
        <li><a href="">Data Eksternal DPMPTSP</a></li>
        @if((Auth::user()->username == 'promosi') || (Auth::user()->username == 'superadmin'))
            <li><a href="{{route('form.kemitraan')}}">Kemitraan</a></li>
        @else
        @endif
        @if((Auth::user()->username == 'yanjin') || (Auth::user()->username == 'superadmin'))
            <li><a href="{{route('gabung.perizinan')}}">Perizinan</a></li>
        @else
        @endif
        @if((Auth::user()->username == 'wasdal') || (Auth::user()->username == 'superadmin'))
            <li><a href="{{route('gabung.pma')}}">Realisasi Investasi</a></li>
        @else
        @endif
        @if((Auth::user()->username == 'pdi') || (Auth::user()->username == 'superadmin'))
            <li><a href="{{route('gabung.oss')}}">Data Investasi OSS</a></li>
            {{--@elseif(Auth::user()->username == 'pdi')
                <li><a href="{{route('rekap.allbidang')}}">Rekap Data Bidang</a></li>--}}
        @else
        @endif
        @if((Auth::user()->username == 'pengaduan') || (Auth::user()->username == 'superadmin'))
            <li><a href="{{route('gabung.pengaduan')}}">Pengaduan</a></li>
        @else
        @endif
        {{--<li><a href="{{route('show.bidang')}}">Input Data Bidang</a></li>--}}
        <li><a href="{{route('gabung.asn')}}">Data Kepegawaian</a></li>
        <li><a href="{{route('gabung.pok')}}">POK</a></li>
        @if((Auth::user()->username == 'sekretariat') || (Auth::user()->username == 'superadmin'))
            <li><a href="{{route('get.all')}}">Settings</a></li>
        @elseif(Auth::user()->username == 'yanjin')
            <li><a href="{{route('setting.yanzin')}}">Settings</li>
        @else
            <li><a href="{{route('setting.all')}}">Settings</a></li>
        @endif
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>

</nav>
