

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        <form class="form-horizontal" action="{{route('update.setting', $edit->id)}}" method="post">
            @method('PATCH')
            @csrf

            <div class="form-group" id="plk">
                <label class="col-lg-2 control-label">PLH</label>
                <div class="col-md-4">

                    <select class="select2_demo_2 form-control" name="edit" id="edit">
                        @foreach($kabid as $kb)
                            <option value="{{$kb->id}}">{{$kb->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="space-15">

            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-sm btn-white" type="submit">PILIH</button>
                </div>
            </div>

        </form>
