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
                <h5>FORM EDIT Banyaknya Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kotadan Kepemilikan Modal</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.kepemilikan', $edit_kepemilikan_modal->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_kepemilikan_modal->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_kepemilikan_modal->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Pemerintah Pusat *</label>
                                <input placeholder="Pemerintah Pusat" name="pem_pusat" id="pem_pusat" class="form-control" value="{{$edit_kepemilikan_modal->pem_pusat}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pemerintah Daerah *</label>
                                <input placeholder="Pemerintah Daerah" name="pem_daerah" id="pem_daerah" value="{{$edit_kepemilikan_modal->pem_daerah}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.</span>--}}

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Swasta Nasional*</label>
                                <input placeholder="Nasional" name="swasta_nas" id="swasta_nas" value="{{$edit_kepemilikan_modal->swasta_nas}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Asing *</label>
                                <input placeholder="asing" name="asing" id="asing" value="{{$edit_kepemilikan_modal->asing}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jumlah" id="jumlah" value="{{$edit_kepemilikan_modal->jumlah}}" class="form-control">
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
