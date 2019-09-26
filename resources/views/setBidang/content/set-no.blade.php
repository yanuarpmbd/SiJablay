<div class="ibox float-e-margins">
    <div class="ibox-content">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    </div>
    @if(count($nomor) == 0)
        <form class="form-horizontal" action="{{route('post.set')}}" method="post">
        @csrf
        <div class="ibox-content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group"><label>No SPT Terakhir</label>
                        <input placeholder="Angka Terakhir Nomor SPT" name="no_spt" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"><label>No SPPD Terakhir</label>
                        <input placeholder="Angka Terakhir Nomor SPPD" name="no_sppd" class="form-control">
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

    @else
        @foreach($nomor as $n)
            last no spt = {{$n->no_spt}}  <br>
            last no sppd = {{$n->no_sppd}}
        @endforeach
    @endif

</div>
