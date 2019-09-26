@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
    <form class="form-horizontal" action="{{route('post.allbidang')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="ibox-content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Nama Dokumen</label>
                        <input placeholder="Nama Dokumen" name="nama_dok" id="nama_dok" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>Tanggal Dokumen</label>
                        <input placeholder="Tanggal" name="bulan" id="bulan" type="date"
                               class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group"><label>Keterangan</label>
                        <input placeholder="Keterangan" name="ket" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group"><label>Dokumen</label>
                        <input placeholder="" name="dok" id="dok" class="form-control" type="file" required>
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
                </div>
            </div>
        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
