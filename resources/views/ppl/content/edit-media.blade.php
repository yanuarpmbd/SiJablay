<div class="ibox float-e-margins">
    <div class="ibox-content">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>

    <div class="ibox-title">
        <h5>FORM EDIT MEDIA</h5>
    </div>

    <form class="form-horizontal" action="{{route('update.media', $edit_media->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="ibox-content">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label>Nama Media *</label>
                            <input placeholder="Nama Media" name="nama_media" value="{{$edit_media->nama_media}}" id="nama_media" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
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
