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
                <h5>FORM EDIT Pengeluaran Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.pengeluaranperusahaan', $edit_pengeluaran_perusahaan->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_pengeluaran_perusahaan->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_pengeluaran_perusahaan->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Bahan Baku dan Penolong *</label>
                                <input placeholder="Rp" name="bahan_baku" id="bahan_baku" value="{{$edit_pengeluaran_perusahaan->bahan_baku}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.</span>--}}

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Bahan Bakar, Tenaga Listrik, dan Gas *</label>
                                <input placeholder="Rp" name="bahan_bakar" id="bahan_bakar"value="{{$edit_pengeluaran_perusahaan->bahan_bakar}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pengeluaran untuk Jasa Industri *</label>
                                <input placeholder="Rp" name="pengeluaran_jasa" id="pengeluaran_jasa" value="{{$edit_pengeluaran_perusahaan->pengeluaran_jasa}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Sewa Gedung, Mesin, dan Alat - alat *</label>
                                <input placeholder="Rp" name="sewa" id="sewa"value="{{$edit_pengeluaran_perusahaan->sewa}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pengeluaran Lain *</label>
                                <input placeholder="Rp" name="pengeluaran_lain" id="pengeluaran_lain" value="{{$edit_pengeluaran_perusahaan->pengeluaran_lain}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Rp" name="jumlah" id="jumlah" value="{{$edit_pengeluaran_perusahaan->jumlah}}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
