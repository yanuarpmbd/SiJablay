
    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Dasar Data SPT  <strong>{{strtoupper(Auth::user()->username)}}</strong></h5>
                </div>

                <div class ="row">
                    <div class="col-10">
                        <div class="form-group"><label>Input Dasar Surat Perintah Tugas</label>
                            <input placeholder="Dasar 1" name="dasar1" id="dasar1" class="form-control" required>
                        </div>
                    </div>


                </div>
                </div>


                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="form-group">
                            <button class="btn btn-app btn-success" type="submit">Tambah</button>
                        </div>
                    </div>
                </div>

        </div>
    </div>

