@extends('page.master')
@section('content')

<div class="row" style="margin-top: 100px">
<div class="col-sm-8">
<div role="tabpanel">
<ul class="nav nav-pills nav-justified">
								<li role="presentation" class="active"><a href="#work" aria-controls="work" role="tab" data-toggle="tab">Nhà tuyển dụng</a></li>
								<li role="presentation"><a href="#fun" aria-controls="fun" role="tab" data-toggle="tab">Người tim việc</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="work">
									

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
          <div class="pull-left">
	          <button type="submit" class="btn btn-primary">Sign In</button>
	          <a href="{!! url('forget/password') !!}">Quên mật khẩu</a>
	        </div>
	        <div class="pull-right">
	        	<button type="submit" class="btn btn-success" onclick="window.location='{!! url('user/register') !!}'">Đăng ký</button>
	        </div>
        </form>
								</div>
								<div role="tabpanel" class="tab-pane" id="fun">
									<p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
								</div>
							</div>

						</div>


    </div>
              <div class="col-sm-4">
		<div>
            <h2>Việc Làm</h2>
                <div class="title">
                  <h5>Việc mới</h5>
                </div>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
            </div>
            <div>
            <hr>
                <div class="title">
                  <h5>Việc làm ngay</h5>
                </div>
                <div class="data">
                 <a href="#">việc 1</a>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
                <a href="#">việc 1</a>
              </div>
            </div>
</div>
</div>
@endsection
