<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

{{--        FORM SEKTOR                    --}}

        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM SEKTOR</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('add.sektor')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"><label>Nama Sektor *</label>
                                <input placeholder="Nama Sektor" name="nama_sektor" id="nama_sektor" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Kode Sektor *</label>
                                <input placeholder="Kode Sektor" name="kode_sektor" id="kode_sektor" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="space-15"></div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="ibox-title">
    <h5>SEKTOR</h5>
</div>
@isset($sektors)
    <div class="row">
        <table class="footable table table-stripped toggle-arrow-tiny">
            <thead>
            <tr class="active">
                <th>No</th>
                <th>Sektor</th>
                <th>Kode Sektor</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            </thead>
            <tbody>

            @foreach($sektors as $sektor)
                <tr>
                    <td style="text-align: center">{{$loop->iteration}}</td>
                    <td style="text-align: center">{{$sektor->nama_sektor}}</td>
                    <td style="text-align: center">{{$sektor->kode_sektor}}</td>
                    <td>
                        <form action="{{route('edit.sektor', $sektor->id)}}" style="margin: 0">
                            <button class="btn btn-block btn-outline-success" id="edit-kategori">Edit</button>
                        </form>
                    </td>
                    <td>
                        <!--modals-->
                        <div id="openModal-about" class="modalDialog">
                            <div>
                                <form action="{{route('delete.sektor', $sektor->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5" class="text-center">
                    <ul class="pagination">
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endisset


{{--FORM MEDIA                                                           --}}

<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>FORM MEDIA</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal" action="{{route('add.media')}}" method="post">
            @csrf
            <div class="ibox-content">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label>Nama MEDIA *</label>
                            <input placeholder="Nama Media" name="nama_media" id="nama_media" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>

                </div>
                <div class="space-15"></div>
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="form-group">
                            <button class="btn btn-app btn-success" type="submit">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="ibox-title">
    <h5>MEDIA</h5>
</div>
@isset($medias)
    <div class="row">
        <table class="footable table table-stripped toggle-arrow-tiny">
            <thead>
            <tr class="active">
                <th>No</th>
                <th>Media</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            </thead>
            <tbody>

            @foreach($medias as $media)
                <tr>
                    <td style="text-align: center">{{$loop->iteration}}</td>
                    <td style="text-align: center">{{$media->nama_media}}</td>

                    <td>
                        <form action="{{route('edit.media', $media->id)}}" style="margin: 0">
                            <button class="btn btn-block btn-outline-success" id="edit-kategori">Edit</button>
                        </form>
                    </td>
                    <td>
                        <!--modals-->
                        <div id="openModal-about" class="modalDialog">
                            <div>
                                <form action="{{route('delete.media', $media->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5" class="text-center">
                    <ul class="pagination">
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endisset


{{--Jenis Layanan                                       --}}
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>FORM JENIS LAYANAN</h5>
    </div>
    <div class="ibox-content">
        <form class="form-horizontal" action=  "{{route('add.layanan')}}"  method="post">
            @csrf
            <div class="ibox-content">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group"><label>Jenis Layanan *</label>
                            <input placeholder="Nama Layanan" name="nama_layanan" id="nama_layanan" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                        </div>
                    </div>

                </div>
                <div class="space-15"></div>
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="form-group">
                            <button class="btn btn-app btn-success" type="submit">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>









<div class="ibox-title">
    <h5>JENIS LAYANAN</h5>
</div>
@isset($layanans)
    <div class="row">
        <table class="footable table table-stripped toggle-arrow-tiny">
            <thead>
            <tr class="active">
                <th>No</th>
                <th>Jenis Layanan</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            </thead>
            <tbody>

            @foreach($layanans as $layanan)
                <tr>
                    <td style="text-align: center">{{$loop->iteration}}</td>
                    <td style="text-align: center">{{$layanan->nama_layanan}}</td>
{{--{{dd($layanan)}}--}}
                    <td>
                        <form action="{{route('edit.layanan', $layanan->id)}}" style="margin: 0">
                            <button class="btn btn-block btn-outline-success" id="edit-kategori">Edit</button>
                        </form>
                    </td>
                    <td>
                        <!--modals-->
                        <div id="openModal-about" class="modalDialog">
                            <div>
                                <form action="{{route('delete.layanan', $layanan->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5" class="text-center">
                    <ul class="pagination">
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endisset
