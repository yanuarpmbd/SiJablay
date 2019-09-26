
<form action="{{route('edit.user', $id->id)}}" method="post">
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <div class="input-group input-group-seamless">
              <span class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
              </span>
                <input type="text" class="form-control" id="form1-username"
                       placeholder="Username" name="username" value="{{ $id->username }}">
            </div>
            @if ($errors->has('username'))
                <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <div class="input-group input-group-seamless">
                <input type="password" name="password" class="form-control" id="form2-password"
                       placeholder="Password">
                <span class="input-group-append">
                    <span class="input-group-text">
                      <i class="fa fa-lock"></i>
                    </span>
                </span>
            </div>
            @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
        </div>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-block btn-pill btn-primary">
            <i class="fa fa-edit mr-1"></i>
            Edit
        </button>
    </div>

</form>
