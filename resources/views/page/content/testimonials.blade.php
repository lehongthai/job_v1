@extends('page.master')
@section('content')

<div class="row" style="margin-top: 100px">
<section id="title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1>Testimonials</h1>
						<h4>Kind words from happy members</h4>
					</div>
				</div>
			</div>
		</section>
<hr>
		<div class="row">
					<div class="col-sm-3 col-md-2">
						<img src="{!! url('public/page') !!}/images/testimonial1.jpg" class="img-circle img-responsive" alt="testimonial" />
					</div>
					<div class="col-sm-9 col-md-10">
						<blockquote>
							<p>Thanks for the great service. Jobseek has completely surpassed our expectations.
							Jobseek is the most valuable business resource we have ever purchased.</p>
							<footer>
								Anthony Walsh
								<cite title="Brand Manager in Ebay Inc.">Brand Manager in Ebay Inc.</cite>
							</footer>
						</blockquote>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>

				<!-- Testimonial 2 -->
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<img src="{!! url('public/page') !!}/images/testimonial2.jpg" class="img-circle img-responsive" alt="testimonial" />
					</div>
					<div class="col-sm-9 col-md-10">
						<blockquote>
							<p>I didn't even need training. I couldn't have asked for more than this.
							It really saves me time and effort. Jobseek is exactly what our business has been lacking.
							I would be lost without Jobseek.</p>
							<footer>
								Becky Daniels
								<cite title="HR Manager in Apple Inc.">HR Manager in Apple Inc.</cite>
							</footer>
						</blockquote>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>

				<!-- Testimonial 3 -->
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<img src="{!! url('public/page') !!}/images/testimonial3.jpg" class="img-circle img-responsive" alt="testimonial" />
					</div>
					<div class="col-sm-9 col-md-10">
						<blockquote>
							<p>I just can't get enough of Jobseek. I want to get a T-Shirt with Jobseek on it so I can show it off to everyone. This is simply unbelievable!</p>
							<footer>
								Erick Olson
								<cite title="Key Account Manager in Twitter Inc.">Key Account Manager in Twitter Inc.</cite>
							</footer>
						</blockquote>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>

				<!-- Testimonial 4 -->
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<img src="{!! url('public/page') !!}/images/testimonial4.jpg" class="img-circle img-responsive" alt="testimonial" />
					</div>
					<div class="col-sm-9 col-md-10">
						<blockquote>
							<p>Jobseek is worth much more than I paid. I'm good to go. I couldn't have asked for more than this. Keep up the excellent work.</p>
							<footer>
								Nadine Boyd
								<cite title="CEO in Company Name">CEO in Company Name</cite>
							</footer>
						</blockquote>
					</div>
				</div>
</div>

@endsection
