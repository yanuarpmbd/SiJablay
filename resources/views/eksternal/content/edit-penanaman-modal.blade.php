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
                <h5>FORM EDIT Banyaknya Perusahaan/Usaha Menengah dan Besar menurut Kabupaten/Kota dan Status Penanaman Modal</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.penanaman', $edit_status_penanaman->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_status_penanaman->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_status_penanaman->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>PMDN *</label>
                                <input placeholder="volume dalam bentuk satuan (Ton)" name="pmdn" id="pmdn" class="form-control" value="{{$edit_status_penanaman->pmdn}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>PPMA *</label>
                                <input placeholder="PMDA" name="ppma" id="ppma" value="{{$edit_status_penanaman->ppma}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Non Fasilitas *</label>
                                <input placeholder="Non Fasilitas" name="non_fasilitas" id="non_fasilitas" value="{{$edit_status_penanaman->non_fasilitas}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jumlah *</label>
                                <input placeholder="Jumlah" name="jumlah" id="jumlah" value="{{$edit_status_penanaman->jumlah}}" class="form-control">
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
