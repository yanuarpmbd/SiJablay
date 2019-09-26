<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM REKAP PENGADUAN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('store.pengaduan')}}" method="post">
                    @csrf
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"><label>Tanggal Pengaduan *</label>
                                    <input type="date" placeholder="Tanggal" name="tanggal" id="tanggal" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"><label>WA/Email/Alamat Medsos</label>
                                    <input placeholder="WA/Email/Alamat Medsos" name="wa_email" id="wa_email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"><label>Nama *</label>
                                    <input placeholder="Nama" name="nama" id="nama" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"><label>Jenis Kelamin *</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"><label>Media *</label>
                                    <select class="form-control" name="media" id="media">
                                        <option value="Helpdesk">Helpdesk</option>
                                        <option value="Email">Email</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                        <option value="Sosial Media">Sosial Media</option>
                                        <option value="SIAP Jateng">SIAP Jateng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"><label>Jenis Layanan *</label>
                                    <select class="form-control" name="jenis_layanan" id="jenis_layanan">
                                        <option value="Informasi">Informasi</option>
                                        <option value="Pengaduan">Pengaduan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"><label>No Telepon</label>
                                    <input placeholder="Nomor Telepon" name="no_telp" id="no_telp" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"><label>Sektor *</label>
                                    <select class="form-control" name="sektor" id="sektor">
                                        <option value="Penanaman Modal">Penanaman Modal</option>
                                        <option value="Tenaga Kerja, Transmigrasi dan Kependudukan">Tenaga Kerja, Transmigrasi dan Kependudukan</option>
                                        <option value="Koperasi dan UKM">Koperasi dan UKM</option>
                                        <option value="Kesbanglinmas">Kesbanglinmas</option>
                                        <option value="Sosial">Sosial</option>
                                        <option value="Pengelolaan Sumberdaya Air">Pengelolaan Sumberdaya Air</option>
                                        <option value="Kelautan dan Perikanan">Kelautan dan Perikanan</option>
                                        <option value="Kehutanan">Kehutanan</option>
                                        <option value="Pekerjaan Umum">Pekerjaan Umum</option>
                                        <option value="Perhubungan, Komunikasi dan Informatika">Perhubungan, Komunikasi dan Informatika</option>
                                        <option value="Perindustrian dan Perdagangan">Perindustrian dan Perdagangan</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option value="Perkebunan">Perkebunan</option>
                                        <option value="Peternakan dan Kesehatan Hewan">Peternakan dan Kesehatan Hewan</option>
                                        <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                                        <option value="ESDM">ESDM</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group"><label>Rincian Aduan *</label>
                                    <input placeholder="Rincian Aduan" name="rincian_aduan" id="rincian_aduan" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group"><label>Penyelesaian *</label>
                                    <input placeholder="Penyelesaian" name="penyelesaian" id="penyelesaian" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="space-15"></div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="form-group">
                                    <button class="btn btn-app btn-success" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
