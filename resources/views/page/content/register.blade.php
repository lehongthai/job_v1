@extends('page.master')
@section('content')

<div class="row" style="margin-top: 100px">
<div class="col-sm-8">
<div role="tabpanel">
<ul class="nav nav-pills nav-justified">
								<li role="presentation" class="active"><a href="#work" aria-controls="work" role="tab" data-toggle="tab">Nhà tuyển dụng</a></li>
								<li role="presentation"><a href="#fun" aria-controls="fun" role="tab" data-toggle="tab">Người tim việc</a></li>
							</ul>
 <hr>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="work">
									
 <ul class="social-login">
            <li><a href="{!! url('facebook/redirect') !!}" class="btn btn-facebook"><i class="fa fa-facebook"></i>Đăng Ký Với Facebook</a></li>
            <li><a href="{!! url('google/redirect') !!}" class="btn btn-google"><i class="fa fa-google-plus"></i>Đăng Ký Với Google</a></li>
          </ul>
        <form method="post" action="{!! url('user/register') !!}" id="form-register">
        <input type="hidden" name="_token" id="input_token" class="form-control" value="{!! csrf_token() !!}">

         
          <div class="text-center"><h3>Đăng ký tìm việc nhanh</h3><span class="require" id="info-register"></span></div>

          <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
                <label>Họ Tên</label><span class="require">*</span>
                <input type="text" class="form-control" id="login-username" name="fullname" value="{!! old('fullname') !!}">
                <div class="require">{!! $errors->first('fullname') !!}</div>
              </div>
              <div class="form-group">
                <label>Số Điện Thoại</label><span class="require">*</span>
                <input type="text" class="form-control" name="phone" value="{!! old('phone') !!}">
                <div class="require">{!! $errors->first('phone') !!}</div>
              </div>
              <div class="form-group">
                <label>Email</label><span class="require">*</span>
                <input type="email" class="form-control" name="email" value="{!! old('email') !!}">
                <div class="require">{!! $errors->first('email') !!}</div>
              </div>
              <div class="form-group">
                <label for="login-password">Mật Khẩu</label><span class="require">*</span>
                <input type="password" class="form-control" id="login-password" name="passwordRegister" >
                <div class="require">{!! $errors->first('passwordRegister') !!}</div>
              </div>
              <div class="form-group">
                <label>Nhập Lại Mật Khẩu</label><span class="require">*</span>
                <input type="password" class="form-control" name="password_confirm" >
                <div class="require">{!! $errors->first('password_confirm') !!}</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Ngày Sinh</label><span class="require">*</span>

                <input type="date" name="birthday" class="form-control" value="{!! old('birthday') !!}">
                <div class="require">{!! $errors->first('birthday') !!}</div>
              </div>
              <div class="form-group">
                <label>Giới Tính</label><span class="require">*</span>
                <select name="sex" id="inputSex" class="form-control">
                  <option value="">-- Select One --</option>
                  <option value="1" @if(old('sex') == 1) selected @endif>-- Nam --</option>
                  <option value="2" @if(old('sex') == 2) selected @endif>-- Nữ --</option>
                </select>
                <div class="require">{!! $errors->first('sex') !!}</div>
              </div>
              <div class="form-group">
                <label>Tỉnh/ Thành Phố</label><span class="require">*</span>
                <select name="provin" id="inputSex" class="form-control">
                  <option value="">-- Vui lòng chọn --</option>
                  @foreach($listProvin as $key => $provin)
                  <option value="{!! $provin->id !!}" @if(old('provin') == $provin->id) selected @endif>-- {!! $provin->name !!} --</option>
                  @endforeach
                </select>
                <div class="require">{!! $errors->first('provin') !!}</div>
              </div>
              <div class="form-group">
                <label>Địa Chỉ</label><span class="require">*</span>
                <textarea name="address" id="input" class="form-control" rows="3">{!! old('address') !!}</textarea>
                <div class="require">{!! $errors->first('address') !!}</div>
              </div>
            </div>
            
          </div>
          <h5 class="require">Điều khoản dịch vụ</h5>
          <div class="demo-scroll">
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
              <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>

              <div class="checkbox">
                <label>
                  <input type="checkbox" value="1" name="rules" id="isAgeSelected">
                  Tôi đồng ý
                </label>
              </div>
            </div>
          <div class="text-center">
	          <button type="button" id="button-register" class="btn btn-primary">Đăng ký</button>
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
	@include('page.blocks.job')
</div>
</div>
@endsection

@section('javascript')
<script>
$( "#button-register" ).click(function() {
  $('#isAgeSelected').each(function () {
        if($(this).is(':checked')){
            $('#form-register').submit();
        }
    });
    document.getElementById("info-register").innerHTML = "Chưa chấp nhận điều khoản của chúng tôi";
});
</script>
@endsection