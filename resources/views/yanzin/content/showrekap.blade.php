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
                <h5>FORM REKAP PERIZINAN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('store.rekap')}}" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group" id="data_1">
                                <label class="col-lg-12 control-label">Bulan</label>
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="bulan" id="bulan" class="form-control"
                                               value="{{$today}}" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" align="center"><h2>Jenis Izin</h2></div>
                        <div class="col-2" align="center"><h2>Izin</h2></div>
                        <div class="col-2" align="center"><h2>Non Izin</h2></div>
                        <div class="col-2" align="center"><h2>SOP</h2></div>
                        <div class="col-2" align="center"><h2>Waktu Selesai</h2></div>
                    </div>
                    @foreach($soppelayanan as $sp)
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <input value="{{$sp->jenis_izin_id}}" name="izins[{{$loop->iteration}}][jns_izin]" id="jns_izin" class="form-control">
                            </div>
                            <div class="col-2">
                                <input name="izins[{{$loop->iteration}}][izin]" id="izin" class="form-control">
                            </div>
                            <div class="col-2">
                                <input name="izins[{{$loop->iteration}}][non_izin]" id="non_izin" class="form-control">
                            </div>
                            <div class="col-2">
                                <input value="<?php if ($sp->sop == null){echo "0";} else{ echo "$sp->sop";}?>" name="izins[{{$loop->iteration}}][sop]" id="sop" class="form-control">
                            </div>
                            <div class="col-2">
                                <input name="izins[{{$loop->iteration}}][waktu_selesai]" id="waktu_selesai" class="form-control">
                            </div>

                        </div>
                    @endforeach
                    <div class="space-15"></div>
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

