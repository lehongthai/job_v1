@extends('page.master')
@section('title', 'Liên Hệ')
@section('about')
	<div id="fh5co-contact" style="margin-top: 50px">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-5 col-md-pull-1 animate-box">
						<div class="fh5co-contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="address">{!! $about->location !!}</li>
								<li class="phone">{!! $about->phone !!}</li>
								<li class="email">{!! $about->email !!}</li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 animate-box">
						<h3>Liên Hệ</h3>
						<form action="{!! URL('contact') !!}" method="post">
						 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="fname">Your Name</label>
									<input type="text" id="fname" name="name" class="form-control" value="{!! old('name') !!}">
									<div style="color:red">{!! $errors->first('name') !!}</div>
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" name="email" class="form-control" value="{!! old('email') !!}">
									<div style="color:red">{!! $errors->first('email') !!}</div>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control">{!! old('message') !!}</textarea>
									<div style="color:red">{!! $errors->first('message') !!}</div>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection