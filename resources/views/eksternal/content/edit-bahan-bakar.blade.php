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
                <h5>FORM EDIT Banyaknya Bahan Bakar dan Pelumas yang Digunakan menurut Kabupaten/Kota dan Jenis Bahan Bakar</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.bahanbakar', $edit_bahan_bakar->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Kabupaten / Kota *</label>
                                <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" value="{{$edit_bahan_bakar->kabupaten_kota}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_bahan_bakar->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Bensin (Ltr) *</label>
                                <input placeholder="Liter" name="bensin" id="bensin" value="{{$edit_bahan_bakar->bensin}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Minyak Solar (Ltr) *</label>
                                <input placeholder="Liter" name="solar" id="solar" value="{{$edit_bahan_bakar->solar}}" class="form-control">
                                <span class="help-block m-b-none">{{--Example block-level help text here.--}}</span>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Batubara & Briket (Ton) *</label>
                                <input placeholder="Ton" name="batubara" id="batubara" value="{{$edit_bahan_bakar->batubara}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Gas dari PGN dan Non PGN (M3) *</label>
                                <input placeholder="M3" name="gas" id="gas" value="{{$edit_bahan_bakar->gas}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>LPG (Kg) *</label>
                                <input placeholder="Kg" name="lpg" id="lpg" value="{{$edit_bahan_bakar->lpg}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pelumas (Ltr) *</label>
                                <input placeholder="" name="pelumas" id="nilai" value="{{$edit_bahan_bakar->pelumas}}" class="form-control">
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
