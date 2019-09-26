

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<div class="space-15">

</div>
<div class="row">
    <div class="col-10" align="center"><h3>Jenis Izin</h3></div>
    <div class="col-2" align="center"><h3>SOP</h3></div>
</div>
    <form class="form-horizontal" action="{{route('update.sop')}}" method="post">

        @foreach($rekap_sop as $d)
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-10">
                    <input type="hidden" value="{{$d->id}}" name="sops[{{$loop->iteration}}][id]" id="id" class="form-control">
                </div>
                <div class="col-10">
                    <input value="{{$d->jenis_izin_id}}" name="sops[{{$loop->iteration}}][jenis_izin]" id="jns_izin" class="form-control">
                </div>
                <div class="col-2">
                    <input value="{{$d->sop}}" name="sops[{{$loop->iteration}}][sop]" id="sop" class="form-control">
                </div>
            </div>
        @endforeach
        <div class="col-2">
            <button class="btn btn-sm btn-white" type="submit">Submit</button>
        </div>
    </form>

