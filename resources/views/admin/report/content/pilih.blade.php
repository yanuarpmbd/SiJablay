<div class="ibox float-e-margins">

    <div class="ibox-content">
        <div class="well">
            <h3>
                Anda Memilih Kegiatan <strong style="color: darkred"><i><u>{{$pilih->nama_kegiatan}}</u></i></strong> sebagai kegiatan prioritas.
            </h3>
            Silahkan tinggalkan pesan bagi kegiatan yang berbenturan
        </div>
        <div class="space-30"></div>
        <form action="{{route('terpilih.kegiatan', $pilih->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <input placeholder="Pesan" name="pesan" id="pesan" class="form-control" required>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-12 col-lg-12">
                    <button class="btn btn-block btn-sm btn-rounded btn-outline-success" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
