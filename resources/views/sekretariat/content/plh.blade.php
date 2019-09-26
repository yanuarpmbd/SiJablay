@if(count($plh) == 0)

    <h1 style="font-family: 'Fjalla One', sans-serif; color: rgba(255,0,0,0.73)"><u>Belum ada PLH</u></h1>

    <a href="{{route('get.plh')}}">
        <button class="btn btn-block btn-outline-primary">Tambah PLH</button>
    </a>

@endif


@isset($plh)
    @foreach($plh as $k)
        <h1 style="font-family: 'Fjalla One', sans-serif;"><u>PLH KEPALA DINAS</u></h1>
        <div class="row">
            <div class="col-6">
                <div class="card text-white bg-warning mb-12" style="max-width: 100rem;">
                    <div class="card-header"><strong>{{ $k->nama_kepala }}</strong></div>
                    <div class="card-body">
                        <p class="card-title">{{ $k->nip_kepala }}</p>
                        <p class="card-title">{{ $k->pangkat_kepala }} / {{$k->pangkat->pangkat}}</p>
                        <p class="card-title">{{ $k->jabatan_kepala }}</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <button>
                    <a href="{{route('edit.setting', $k->id)}}">
                        <button class="btn btn-block btn-outline-success">GANTI</button>
                    </a>
                </button>
                <div class="space-30">

                </div>
                <form action="{{route('delete.setting', $k->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-block btn-danger" type="submit">
                        DELETE
                    </button>
                </form>
            </div>

        </div>

    @endforeach

@endisset

<div class="space-30">

</div>

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





        {{--@if(count($plh) == 0)
            TIDAK ADA PLH
            <button>
                <a href="{{route('get.plh')}}">Tambah PLH</a>
            </button>
        @endif--}}




