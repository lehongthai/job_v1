<div class="popup-form">
        <div class="popup-header">
          <a class="close"><i class="fa fa-remove fa-lg"></i></a>
          <h2>Login</h2>
        </div>
        <form method="post" action="{!! url('auth/login') !!}">
        <input type="hidden" name="_token" id="input_token" class="form-control" value="{!! csrf_token() !!}">
          <ul class="social-login">
            <li><a href="{!! url('facebook/redirect') !!}" class="btn btn-facebook"><i class="fa fa-facebook"></i>Đăng Nhập Với Facebook</a></li>
            <li><a href="{!! url('google/redirect') !!}" class="btn btn-google"><i class="fa fa-google-plus"></i>Đăng Nhập Với Google</a></li>
          </ul>
          <hr>
          <div class="form-group">
            <label for="login-username">Username</label>
            <input type="text" class="form-control" id="login-username" name="usernameLogin" value="{!! old('usernameLogin') !!}">
            <div style="color: red">{!! $errors->first('usernameLogin') !!}</div>
          </div>
          <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" class="form-control" id="login-password" name="passwordLogin" >
            <div style="color: red">{!! $errors->first('passwordLogin') !!}</div>
          </div>
          <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
      </div>