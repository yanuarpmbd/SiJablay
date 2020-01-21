<div class="ibox float-e-margins">
    <div class="ibox-content">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>

    <div class="ibox-title">
        <h5>FORM EDIT REKAP PENGADUAN</h5>
    </div>

    <form class="form-horizontal" action="{{route('update.pengaduan', $rek_pengaduan->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="ibox-content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Tanggal Pengaduan *</label>
                        <input type="date" value="{{$rek_pengaduan->tanggal}}" name="tanggal" id="tanggal" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>WA/Email/Alamat Medsos</label>
                        <input value="{{$rek_pengaduan->wa_email}}" name="wa_email" id="wa_email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Nama *</label>
                        <input value="{{$rek_pengaduan->nama}}" name="nama" id="nama" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Jenis Kelamin *</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Laki-laki" {{($rek_pengaduan->jenis_kelamin == 'Laki-laki')?"selected":""}}>Laki-laki</option>
                            <option value="Perempuan" {{($rek_pengaduan->jenis_kelamin == 'Perempuan')?"selected":""}}>Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Media *</label>
                        <select class="form-control" name="media" id="media">
                            @foreach($medias as $media)
                                <option value="{{$media->id}}">{{$media->nama_media}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Jenis Layanan *</label>
                        <select class="form-control" name="jenis_layanan" id="jenis_layanan">
                            <option value="Informasi" {{($rek_pengaduan->jenis_layanan == 'Informasi')?"selected":""}}>Informasi</option>
                            <option value="Pengaduan" {{($rek_pengaduan->jenis_layanan == 'Pengaduan')?"selected":""}}>Pengaduan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>No Telepon</label>
                        <input value="{{$rek_pengaduan->no_telp}}" name="no_telp" id="no_telp" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Sektor *</label>
                        <select class="form-control" name="sektor" id="sektor">
                            <option value="Penanaman Modal" {{($rek_pengaduan->sektor == 'Penanaman Modal')?"selected":""}}>Penanaman Modal</option>
                            <option value="Tenaga Kerja, Transmigrasi dan Kependudukan" {{($rek_pengaduan->sektor == 'Tenaga Kerja, Transmigrasi dan Kependudukan')?"selected":""}}>Tenaga Kerja, Transmigrasi dan Kependudukan</option>
                            <option value="Koperasi dan UKM" {{($rek_pengaduan->sektor == 'Koperasi dan UKM')?"selected":""}}>Koperasi dan UKM</option>
                            <option value="Kesbanglinmas" {{($rek_pengaduan->sektor == 'Kesbanglinmas')?"selected":""}}>Kesbanglinmas</option>
                            <option value="Sosial" {{($rek_pengaduan->sektor == 'Sosial')?"selected":""}}>Sosial</option>
                            <option value="Pengelolaan Sumberdaya Air" {{($rek_pengaduan->sektor == 'Pengelolaan Sumberdaya Air')?"selected":""}}>Pengelolaan Sumberdaya Air</option>
                            <option value="Kelautan dan Perikanan" {{($rek_pengaduan->sektor == 'Kelautan dan Perikanan')?"selected":""}}>Kelautan dan Perikanan</option>
                            <option value="Kehutanan" {{($rek_pengaduan->sektor == 'Kehutanan')?"selected":""}}>Kehutanan</option>
                            <option value="Pekerjaan Umum" {{($rek_pengaduan->sektor == 'Pekerjaan Umum')?"selected":""}}>Pekerjaan Umum</option>
                            <option value="Perhubungan, Komunikasi dan Informatika" {{($rek_pengaduan->sektor == 'Perhubungan, Komunikasi dan Informatika')?"selected":""}}>Perhubungan, Komunikasi dan Informatika</option>
                            <option value="Perindustrian dan Perdagangan" {{($rek_pengaduan->sektor == 'Perindustrian dan Perdagangan')?"selected":""}}>Perindustrian dan Perdagangan</option>
                            <option value="Kesehatan" {{($rek_pengaduan->sektor == 'Kesehatan')?"selected":""}}>Kesehatan</option>
                            <option value="Perkebunan" {{($rek_pengaduan->sektor == 'Perkebunan')?"selected":""}}>Perkebunan</option>
                            <option value="Peternakan dan Kesehatan Hewan" {{($rek_pengaduan->sektor == 'Peternakan dan Kesehatan Hewan')?"selected":""}}>Peternakan dan Kesehatan Hewan</option>
                            <option value="Lingkungan Hidup" {{($rek_pengaduan->sektor == 'Lingkungan Hidup')?"selected":""}}>Lingkungan Hidup</option>
                            <option value="ESDM" {{($rek_pengaduan->sektor == 'ESDM')?"selected":""}}>ESDM</option>
                            <option value="Pendidikan" {{($rek_pengaduan->sektor == 'Pendidikan')?"selected":""}}>Pendidikan</option>
                            <option value="Lainnya" {{($rek_pengaduan->sektor == 'Lainnya'?"selected":"")}}>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group"><label>Rincian Aduan *</label>
                        <input value="{{$rek_pengaduan->rincian_aduan}}" name="rincian_aduan" id="rincian_aduan" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group"><label>Penyelesaian *</label>
                        <input value="{{$rek_pengaduan->penyelesaian}}" name="penyelesaian" id="penyelesaian" class="form-control">
                    </div>
                </div>
            </div>
            <div class="space-15">
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-white" type="submit">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
    </form>
</div>
