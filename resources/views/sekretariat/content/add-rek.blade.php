

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

            @isset($rek)
                @foreach($rek as $k)
                    <div class="row">
                        <div class="col-6">
                            {{ $k->jns_rek }} <br>
                            {{ $k->no_rek }} <br>
                        </div>
                        {{--<div class="col-6">
                            <button>
                                <a href="{{route('edit.setting', $k->id)}}">GANTI</a>
                            </button>
                        </div>--}}
                    </div>

                @endforeach

            @endisset

            @if(count($rek) == 0)
                TIDAK ADA DATA
            @endif

    <div class="space-15">

    </div>

    <form class="form-horizontal" action="{{route('post.rek')}}" method="post">
        @csrf
        <div class="ibox-content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>Jenis Rekening PD</label>
                        <input placeholder="dalam/luar daerah" name="jns_rek" id="jns_rek"
                               class="form-control"> {{--<span class="help-block m-b-none">Example block-level help text here.</span>--}}

                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>No Rekening</label>
                        <input placeholder="No rekening" name="no_rek" id="no_rek" class="form-control">
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

