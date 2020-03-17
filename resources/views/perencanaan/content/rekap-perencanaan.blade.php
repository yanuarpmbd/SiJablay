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
                    <h5>REKAP PERENCANAAN<strong>{{--{{$user_name}}--}}</strong></h5>
                </div>
                <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.perencanaan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group"><label>Upload File</label>
                                <input name="file" id="file" class="form-control" type="file" required>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-6">
                                <div class="form-group"><label>Keterangan</label>
                                    <input placeholder="keterangan" name="keterangan" id="keterangan" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox-content">
                        <table class="footable" id="tablel" style="table-layout: fixed" data-paging="true" data-sorting="true" data-show-toggle="true" data-paging-size="20" data-filtering="true">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Berkas</th>
                                <th>Keterangan</th>
                                <th>Download</th>
                                <th>Hapus</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rek_perencanaan as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p->file}}</td>
                                    <td>{{$p->keterangan}}</td>
                                    <td><a class="btn btn-block btn-outline-success" href="{{route('download.perencanaan')}}">Download</a></td>
                                    <td><a class="btn btn-block btn-outline-danger" action="{{--{{route('delete.perencanaan')}}--}}">Hapus</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
