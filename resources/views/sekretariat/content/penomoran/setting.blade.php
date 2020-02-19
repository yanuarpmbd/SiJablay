<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Kode Surat Availibility</h5>
            </div>
            <div class="ibox-content">

                    <form class="form-horizontal" action="{{route('setting.kode')}}" method="post">
                        @csrf
                        <div class="ibox-content">
                            <div class="row">
                                <div class="form-group" id="kode">

                                    <label class="col-lg-12 control-label">Kode Surat*</label>

                                    <select class="select2_demo_3 form-control" name="kode[]" id="kode"
                                            style="width: 100%" multiple required>
                                        @foreach($kodes_null as $kode)
                                            <option value="{{$kode->id}}">{{$kode->kode}} | {{$kode->desc}}</option>
                                        @endforeach
                                    </select>
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
                    <table class="footable table table-stripped toggle-arrow-tiny" data-paging="true">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($kodes as $ko)
                            <tr>
                                <td style="text-align: left">{{$loop->iteration}}</td>
                                <td style="text-align: left">{{$ko->spare}}</td>
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
        </div>
    </div>
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! $message !!}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Spare Nomor Surat</h5>
            </div>
            <div class="ibox-content">
                @isset($settings)
                    <button class="btn btn-block btn-outline-success" onclick="addSetting()">Add</button>
                    <form class="form-horizontal" action="{{route('add.setting-nomor')}}" method="post" id="addSetting" style="display: none">
                        @csrf
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group"><label>Spare Nomor Harian</label>
                                        <input placeholder="Spare Nomor Harian" name="setting" id="setting"
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
                <table class="footable table table-stripped toggle-arrow-tiny" data-paging="true">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Spare Nomor Harian</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($settings as $setting)
                            <tr>
                                <td style="text-align: left">{{$loop->iteration}}</td>
                                <td style="text-align: left">{{$setting->spare}}</td>
                                <td>
                                    <form action="{{route('edit.setting-nomor', $setting->id)}}">
                                        <button class="btn btn-block btn-outline-success" id="edit-setting">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('delete.setting-nomor', $setting->id)}}">
                                        <button class="btn btn-block btn-outline-danger" id="hapus-setting">Hapus</button>
                                    </form>
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
                @else
                    <tr>
                        <td>
                            <form class="form-horizontal" action="{{route('add.setting-nomor')}}" method="post">
                                @csrf
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group"><label>Spare Nomor Harian</label>
                                                <input placeholder="Spare Nomor Harian" name="setting" id="setting"
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
                        </td>
                    </tr>
                @endisset
            </div>
        </div>
    </div>
</div>

