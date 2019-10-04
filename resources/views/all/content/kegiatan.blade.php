<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if(session()->has('bad'))
            <div class="alert alert-danger alert-block">
                {{ session()->get('bad') }}
            </div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM KEGIATAN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('post.kegiatan')}}" method="post">
                @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group"><label>Nama Kegiatan *</label>
                                <input placeholder="Nama Kegiatan" name="nama_keg" id="nama_keg" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Seksi *</label>
                                <select class="form-control" name="seksi" id="seksi">
                                    <option value="Kepala Dinas">Kepala Dinas</option>
                                    <option value="Sub Bidang Umum dan Kepegawaian">Sub Bagian Umum dan Kepegawaian</option>
                                    <option value="Sub Bagian Program">Sub Bagian Program</option>
                                    <option value="Sub Bagian Keuangan">Sub Bagian Keuangan</option>
                                    <option value="Seksi Perencanaan">Seksi Perencanaan</option>
                                    <option value="Seksi Pengkajian dan Pengembangan Potensi dan Kewilayahan">Seksi Pengkajian dan Pengembangan Potensi dan Kewilayahan</option>
                                    <option value="Seksi Promosi">Seksi Promosi</option>
                                    <option value="Seksi Pembinaan">Seksi Pembinaan</option>
                                    <option value="Seksi Pemberdayaan Usaha">Seksi Pemberdayaan Usaha</option>
                                    <option value="Seksi Administrasi Perizinan Bidang Pembangunan">Seksi Administrasi Perizinan Bidang Pembangunan</option>
                                    <option value="Seksi Administrasi Perizinan Bidang Perekonomian">Seksi Administrasi Perizinan Bidang Perekonomian</option>
                                    <option value="Seksi Administrasi Perizinan Bidang Kesra dan Lingkungan">Seksi Administrasi Perizinan Bidang Kesra dan Lingkungan</option>
                                    <option value="Seksi Pengawasan">Seksi Pengawasan</option>
                                    <option value="Seksi Pengendalian">Seksi Pengendalian</option>
                                    <option value="Seksi Monitoring dan Evaluasi">Seksi Monitoring dan Evaluasi</option>
                                    <option value="Seksi Penanganan Pengaduan">Seksi Penanganan Pengaduan</option>
                                    <option value="Seksi Peningkatan Sarana dan Prasarana Layanan">Seksi Peningkatan Sarana dan Prasarana Layanan</option>
                                    <option value="Seksi Pengolahan Data dan Informasi">Seksi Pengolahan Data dan Informasi</option>
                                    <option value="Seksi Pengembangan Sistem Informasi">Seksi Pengembangan Sistem Informasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Program Kerja *</label>
                                <input placeholder="Program Kerja" name="proker" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Peserta *</label>
                                <input placeholder="Peserta" name="peserta" id="peserta" class="form-control">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group"><label>Tempat *</label>
                                <select class="form-control" name="tempat" id="tempat" required>
                                    @foreach($tempat as $t)
                                        <option value="{{$t->id}}">{{$t->tempat_keg}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-1" align="center "><label></label>
                            <div align="center">
                                <a href="{{action('All\KegiatanController@showTempatKegiatan')}}" class="btn btn-app btn-success fa fa-plus"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="data_1"><label>Tanggal Kegiatan *</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" name="tgl_keg" id="tgl_keg" class="form-control"
                                           value="{{$today}}" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" name="pukul_mulai" class="form-control" value="09:00" >
                                <span class="input-group-addon">
                                            <span class="fa fa-clock-o"></span>
                                        </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" name="pukul_selesai" class="form-control" value="11:00" >
                                <span class="input-group-addon">
                                            <span class="fa fa-clock-o"></span>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="space-15">
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
