
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <form class="form-horizontal" action="{{route('post.setting')}}" method="post">
            @csrf

            <div class="form-group" id="plk">
                <label class="col-lg-2 control-label">PLH</label>
                <div class="col-md-12">

                    <select class="select2_demo_2 form-control" name="plh" id="plh">
                        @foreach($kabid as $kb)
                            <option value="{{$kb->id}}">{{$kb->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="space-15">

            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-12">
                    <button class="btn btn-sm btn-outline-primary" type="submit">Submit</button>
                </div>
            </div>


        </form>

