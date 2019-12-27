<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! $message !!}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Kategori Surat</h5>
            </div>
            <div class="ibox-content">
                @isset($kategoris)
                <button class="btn btn-block btn-outline-success" onclick="addKategori()">Add</button>
                    <form class="form-horizontal" action="{{route('add.kategori-nomor')}}" method="post" id="addKategori" style="display: none">
                        @csrf
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group"><label>Nama Kategori</label>
                                        <input placeholder="Nama Kategori" name="kategori" id="kategori"
                                               class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}

                                    </div>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                <table class="footable table table-stripped toggle-arrow-tiny">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($kategoris as $kategori)
                        <tr>
                            <td style="text-align: left">{{$loop->iteration}}</td>
                            <td style="text-align: left">{{$kategori->nama_kategori}}</td>
                            <td>
                                <form action="{{route('edit.kategori-nomor', $kategori->id)}}" style="margin: 0">
                                    <button class="btn btn-block btn-outline-success" id="edit-kategori">Edit</button>
                                </form>

                            </td>
                            <td>
                                <a href="#openModal-about">
                                    <button class="btn btn-block btn-outline-danger" id="hapus-kategori">Hapus</button>
                                </a>
                                <!--modals-->
                                <div id="openModal-about" class="modalDialog">
                                    <div>
                                        <a href="#close" title="Close" class="close">X</a>
                                        <h2>Are you sure want to delete this data?</h2>
                                        <form action="{{route('delete.kategori-nomor', $kategori->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-danger">Yes, I am Sure</button>
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




                @endisset
            </div>
        </div>
    </div>
</div>


