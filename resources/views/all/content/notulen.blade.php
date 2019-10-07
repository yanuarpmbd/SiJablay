<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM NOTULEN</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('store.notulen')}}" method="post">
                @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group" id="data_1"><label class="col-lg-2 control-label">Tanggal</label>
                                <div class="col-lg-12">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="tgl" id="tgl" class="form-control" value="{{$today}}" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"><label>Pukul *</label>
                                <div class="col-lg-12">
                                <input placeholder="00:00 - 00:00" name="pukul" id="pukul" class="form-control" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="col-lg-12">
                            <div class="form-group"><label>Tempat *</label>
                                <input placeholder="Tempat" name="tempat" id="tempat" class="form-control" autocomplete="off" required>
                            </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="col-lg-12">
                            <div class="form-group"><label>Acara *</label>
                                <input placeholder="Acara" name="acara" id="acara" class="form-control" autocomplete="off" required>
                            </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="col-lg-12">
                            <div class="form-group"><label>Peserta *</label>
                                <input placeholder="Peserta Rapat" name="peserta" class="form-control" autocomplete="off" required>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if ($errors->has('pemimpin_rpt'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('pemimpin_rpt') }}</strong>
                                </span>
                        @endif
                            @if ($errors->has('pengampu_keg'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pengampu_keg') }}</strong>
                                </span>
                            @endif
                            @if ($errors->has('notulis'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('notulis') }}</strong>
                                </span>
                            @endif
                        <div class="col-4">
                            <div class="form-group" id="plk">
                                <div class="col-lg-12">
                                <label>Pemimpin Rapat *</label>
                                    <select class="select2_demo_3 form-control" name="pemimpin_rpt" id="pemimpin_rpt" autocomplete="off" required>
                                        @foreach($nama as $d)
                                            <option value=""></option>
                                            <option value="{{$d->id}}">{{$d->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group" id="plk">
                                <div class="col-lg-12">
                                <label>Pengampu Kegiatan *</label>
                                    <select class="select2_demo_3 form-control" name="pengampu_keg" id="pengampu_keg" autocomplete="off" required>
                                        @foreach($nama as $d)
                                            <option value=""></option>
                                            <option value="{{$d->id}}">{{$d->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group" id="plk">
                                <div class="col-lg-12">
                                <label>Notulis *</label>
                                    <select class="select2_demo_3 form-control" name="notulis" id="notulis" autocomplete="off" required>
                                        @foreach($nama as $d)
                                            <option value=""></option>
                                            <option value="{{$d->id}}">{{$d->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group"><label>Hasil Rapat *</label>
                                <textarea name="article-ckeditor" id="article-ckeditor"></textarea>
                                <textarea name="hidden-editor" id="hidden-editor" style="display:none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="space-15">
                    </div>
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="form-group">
                                <button class="btn btn-app btn-success" type="submit" id="submit-notulen">Submit</button>
                                <button class="btn btn-app btn-danger" type="button" id="absenbutton">Tambah Lembar Persetujuan</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="ibox collapse" id="absen">
                    <div class="ibox-content">
                        <form id="absenform">
                            <input type="button" class="add-row" value="Tambah Baris">
                        </form>
                        <table id="tblAbsen" cellspacing="0" cellpadding="0">
                            <thead title="Persetujuan">
                            <tr>
                                <th>Nama</th>
                                <th>Asal Instansi</th>
                                <th>Jabatan</th>
                                <th>Tanda Tangan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                            </tr>
                            </tbody>
                        </table>
                        <button id="exportButton" class="btn btn-lg btn-danger clearfix"><span class="fa fa-file-pdf-o"></span> Export to PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#absenbutton").click(function(){
            $("#absen").toggle();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var nama = ("");
            var instansi = ("");
            var jabatan =("");
            var ttd = ("");
            var markup = "<tr><td>" + nama + "</td><td>" + instansi + "</td><td>" + jabatan + "</td><td>" + ttd + "</td></tr>";
            $("table tbody").append(markup);
        });

        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[nama="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.footable').footable();
        $('.footable2').footable();
    });
</script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/css" src="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#tblAbsen",
                schema: {
                    type: "table",
                    fields: {
                        nama: { type: String },
                        instansi: { type: String },
                        ttd: { type: String }
                    }
                }
            });
            // when parsing is done, export the data to PDF
            dataSource.read().then(function (data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "SiJablay DPMPTSP Jateng",
                    created: new Date()
                });
                pdf.addPage("a4", "portrait");
                pdf.table(
                    50,
                    50,
                    data,
                    [
                        { field: "Nama", title: "Nama", width: 150},
                        { field: "Asal Instansi", title: "Asal Instansi", width: 150 },
                        { field: "Jabatan", title: "Jabatan", width: 100 },
                        { field: "TTD", title: "Tanda Tangan", width: 100 }
                    ],
                    {
                        margins: {
                            top: 100,
                            left: 50
                        }
                    }
                );
                pdf.saveAs({
                    fileName: "Absen"
                });
            });
        });
    });
</script>
