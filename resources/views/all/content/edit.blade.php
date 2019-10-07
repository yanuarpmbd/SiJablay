<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>EDIT KEGIATAN</h5>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <form class="form-horizontal" action="{{route('update.kegiatan', $edit->id)}}" method="post">
                    @method('PATCH')
                    @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"><label>Nama Kegiatan</label>
                                    <input value="{{$edit->nama_kegiatan}}" name="nama_keg" id="nama_keg" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"><label>Seksi *</label>
                                        <select class="form-control" name="seksi" id="seksi" required>
                                            <option selected value="{{$edit->seksi}}">{{$edit->seksi}}</option>
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
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"><label>Peserta</label>
                                    <input value="{{$edit->peserta}}" name="peserta" id="peserta" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"><label>Tempat</label>
                                    <input value="{{$edit->tempat}}" name="tempat" id="tempat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" id="data_1"><label>Tanggal Kegiatan</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="tgl_keg" id="tgl_keg" class="form-control"
                                               value="{{$edit->tanggal}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" name="pukul_mulai" class="form-control" value="{{$edit->pukul_mulai}}" >
                                    <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" name="pukul_selesai" class="form-control" value="{{$edit->pukul_selesai}}" >
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
</div>
