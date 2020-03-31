<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if(session()->has('bad'))
            <div class="alert alert-danger alert-block">
                {{ session()->get('bad') }}
            </div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM POK</h5>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal" action="{{route('post.formRKO')}}" method="post">
                    @csrf
                    <div class="ibox-content">


                        <div class="row">

                            <div class="col-6">
                                <div class="form-group" id="pd">
                                <label class="control-label" required>Kegiatan*</label>
                                <select class="select2_demo_2 form-control" name="kegiatan" >
                                    @foreach($dropdown as $rko)
                                        <option value="{{$rko->id}}">{{$rko->nama_kegiatan}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label">Tahun</label>
                                    <input type="text" name="tahun">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <input placeholder="Nama Sub Kegiatan" type="text" name="nama_sub_rko" id="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input placeholder="Jumlah Anggaran Sub Kegiatan" type="number" name="jml_anggaran_sub_rko" id="">
                                </div>
                            </div>
                            <div class="col-4" id="target">

                                    @for($i=1;$i<=12;$i++)
                                        <label>
                                            @switch($i)
                                                @case(1)
                                                Januari
                                                @break
                                                @case(2)
                                                Februari
                                                @break
                                                @case(3)
                                                Maret
                                                @break
                                                @case(4)
                                                April
                                                @break
                                                @case(5)
                                                Mei
                                                @break
                                                @case(6)
                                                Juni
                                                @break
                                                @case(7)
                                                Juli
                                                @break
                                                @case(8)
                                                Agustus
                                                @break
                                                @case(9)
                                                September
                                                @break
                                                @case(10)
                                                Oktober
                                                @break
                                                @case(11)
                                                November
                                                @break
                                                @case(12)
                                                Desember
                                                @break
                                            @endswitch
                                        </label>
                                        <input placeholder="Target" type="text" name="target_sub_rko[{{$i}}]" id="">
                                    @endfor
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="form-group">
                                    <div class="col-lg-offset-0 col-lg-12">
                                        <button class="btn btn-sm btn-white" type="submit" id="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

