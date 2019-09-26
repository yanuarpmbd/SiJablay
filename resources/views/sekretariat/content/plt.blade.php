@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if((count($kepala) || count($plt)) == 0)
    <h1 style="font-family: 'Fjalla One', sans-serif;">Kepala Dinas Sementara <strong style="color: #f7082d">
            <u>Kosong</u> 😭 </strong></h1>

    <div class="space-30">
        <a href="{{route('get.plt')}}">
            <button class="btn btn-block btn-outline-primary">
                Tambah PLT
            </button>
        </a>
    </div>
@else
    @if(count($plt) == 0)
        @foreach($kepala as $k)
            {{ $k->nama }} <br>
            {{ $k->nip }} <br>
            {{ $k->gol }} / {{--{{$k->pangkat->pangkat}}--}}<br>
            {{ $k->jabatan }} <br>
        @endforeach

    @else
        <h1 style="font-family: 'Fjalla One', sans-serif;"><u>PLT KEPALA DINAS</u></h1>
        <div class="space-15">

        </div>
        @foreach($plt as $p)
            <div class="card text-white bg-primary mb-12" style="max-width: 100rem;">
                <div class="card-header"><strong>{{ $p->plt->nama }}</strong></div>
                <div class="card-body">
                    <p class="card-title">{{ $p->plt->nip }}</p>
                    <p class="card-title">{{ $p->plt->jabatan }}</p>
                    <p class="card-title">{{ $p->pangkat->gol}}/{{ $p->pangkat->pangkat}}</p>
                </div>
            </div>
        @endforeach
    @endif


@endif



