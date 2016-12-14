<div class="popup" id="register">
<div class="popup-form">
        <div class="popup-header">
          <a class="close"><i class="fa fa-remove fa-lg"></i></a>
          <h2>Register</h2>
        </div>
        <form method="post" action="{!! url('user/register') !!}">
        <input type="hidden" name="_token" id="input_token" class="form-control" value="{!! csrf_token() !!}">
          <div class="form-group">
            <label for="register-name">Name</label>
            <input type="text" class="form-control" id="register-name" name="fullname" value="{!! old('fullname') !!}">
            <div style="color:red">{!! $errors->first('fullname'); !!}</div>
          </div>
          <div class="form-group">
            <label for="register-email">Email</label>
            <input type="email" class="form-control" id="register-email" name="email" value="{!! old('email') !!}">
            <div style="color:red">{!! $errors->first('email'); !!}</div>
          </div>
          <div class="form-group">
            <label for="register-username">Username</label>
            <input type="text" class="form-control" id="register-username" name="username" value="{!! old('username') !!}">
            <div style="color:red">{!! $errors->first('username'); !!}</div>
          </div>
          <div class="form-group">
            <label for="register-password1">Password</label>
            <input type="password" class="form-control" id="register-password1" name="password">
            <div style="color:red">{!! $errors->first('password'); !!}</div>
          </div>
          <div class="form-group">
            <label for="register-password2">Repeat Password</label>
            <input type="password" class="form-control" id="register-password2" name="password_confirmation">
            <div style="color:red">{!! $errors->first('password_confirmation'); !!}</div>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
</div>
