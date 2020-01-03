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
                <h5>Ambil Nomor</h5>
            </div>
            <div class="ibox-content">
                @isset($kategoris)
                    <div class="row">
                        @foreach($kategoris as $kategori)
                            @if($kategori->id == 2)

                                @else
                                <div class="col-6">
                                    <button class="btn btn-block btn-outline-success" style="min-height: 300px; font-size: 68px" onclick="{{str_replace(' ', '', (strtolower($kategori->nama_kategori)))}}()">{{$kategori->nama_kategori}}</button>
                                </div>
                            @endif

                        @endforeach
                    </div>

                    <div class="row">
                        @foreach($kategoris as $kategori)
                            @if($kategori->nama_kategori == 'SPT')

                            @else
                                <div class="col-12">
                                    <form class="form-horizontal" action="{{route('add.nd')}}" method="post" id="{{str_replace(' ', '', (strtolower($kategori->nama_kategori)))}}" style="display: none">
                                        @csrf
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-12">

                                                        <input name="kategori" id="kategori" value="{{$kategori->id}}" hidden> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                                                        <input name="user_id" id="user_id" value="{{Auth::user()->id}}" hidden> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}

                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group"><label>Perihal</label>
                                                        <input placeholder="Perihal Surat" name="perihal" id="perihal" class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group"><label>Tanggal</label>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                                                   value="{{$today}}">
                                                            <input type="time" name="time" id="time" class="form-control"
                                                                   value="{{date('H:i:s')}}" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group" id="kode">

                                                        <label class="col-lg-12 control-label">Jenis Surat*</label>

                                                            <select class="select2_demo_3 form-control" name="kode" id="kode"
                                                                   style="width: 100%" required>
                                                                @foreach($kodes as $kode)
                                                                    <option value="{{$kode->id}}">{{$kode->kode}} | {{$kode->desc}}</option>
                                                                @endforeach
                                                            </select>


                                                        {{--<label class="col-lg-12 control-label">Pembuka Nota Dinas</label>
                                                        <div class="col-12">

                                                            <input placeholder="Pembuka Nota Dinas/ Sebelum dalam rangka" name="pembuka" id="pembuka" class="form-control">

                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                                    </div>
                                                </div>


                                        </div>
                                    </form>
                                </div>
                            @endif

                        @endforeach

                    </div>

                @endisset

                @isset($nomors)
                    <div class="row">
                        <table class="footable table table-stripped toggle-arrow-tiny">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Perihal</th>
                                <th>Tanggal</th>
                                <th>Nomor Surat</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(Auth::user()->id == 7)
                                @foreach($nomors->where('arsip_id', '!=', null) as $nomor)
                                    <tr>
                                        <td style="text-align: center">{{$loop->iteration}}</td>
                                        <td style="text-align: center">{{$nomor->perihal}}</td>
                                        <td style="text-align: center">{{$nomor->tanggal}}</td>
                                        <td style="text-align: center">{{$nomor->kodenomor->kode}}/{{$nomor->count}}</td>
                                    </tr>
                                @endforeach
                            @else
                            @foreach($nomors->where('user_id', Auth::user()->id) as $nomor)
                                <tr>
                                    <td style="text-align: center">{{$loop->iteration}}</td>
                                    <td style="text-align: center">{{$nomor->perihal}}</td>
                                    <td style="text-align: center">{{$nomor->tanggal}}</td>
                                    <td style="text-align: center">{{$nomor->kodenomor->kode}}/{{$nomor->count}}</td>
                                </tr>
                            @endforeach
                            @endif
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
            </div>
        </div>
    </div>
</div>


