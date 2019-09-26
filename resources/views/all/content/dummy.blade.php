<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>NOTULEN Bidang <strong>{{$user_name}}</strong></h5>
            </div>
            <div class="ibox-content">
                <form action="{{route('rekap.notulen')}}">
                    <button class="btn btn-block btn-outline-danger">Rekap</button>
                </form>
            </div>
        </div>
    </div>
</div>

