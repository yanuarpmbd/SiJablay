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
                <h5>FORM EDIT Jenis Komoditi</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('update.eksporimpor', $edit_ekspor_impor->id)}}" method="post">
                    @csrf
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Tahun *</label>
                                <input type="text" placeholder="Tahun" name="tahun" value="{{$edit_ekspor_impor->tahun}}" id="tahun" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group"><label>Jenis Volume & Nilai *</label>
                                <select class="form-control" name="jenis_volume" id="jenis_volume">
                                    <option value="Ekspor"> Ekspor </option>
                                    <option value="Impor"> Impor </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Jenis Komoditi *</label>
                                <input placeholder="Jenis Komoditi" name="jenis_komoditi" id="jenis_komoditi" class="form-control" value="{{$edit_ekspor_impor->jenis_komoditi}}">
                                <span class="help-block m-b-none">{{--Example block-level help text here.</span>--}}

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Volume (Ton) *</label>
                                <input placeholder="volume dalam bentuk satuan (Ton)" name="volume" id="volume" class="form-control" value="{{$edit_ekspor_impor->volume}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Nilai (Juta US $) *</label>
                                <input placeholder="Nilai dalam juta" name="nilai" id="nilai" class="form-control"value="{{$edit_ekspor_impor->nilai}}">
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
