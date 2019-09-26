
<form class="form-horizontal" action="{{route('post.plt')}}" method="post">
    @csrf
    <div style="align-content: center!important; padding: 20px">Pilih PLT</div>
    <div class="form-group" id="plk">
        <div class="col-md-12">

            <select class="select2_demo_2 form-control" name="plt" id="plt">
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
            <button class="btn btn-sm btn-block btn-outline-primary" type="submit">Submit</button>
        </div>
    </div>


</form>
