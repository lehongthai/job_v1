@extends('page.master')
@section('content')

<div class="row" style="margin-top: 100px">
<section id="title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<img src="{!! url('public/page') !!}/images/client-logo-big.gif" class="img-responsive" alt="" />
					</div>
				</div>
			</div>
		</section>
		<hr>
					<div class="col-sm-8">
						<article>
							<h2>About this company</h2>
							<p>Maecenas mollis dictum lectus quis scelerisque. Nulla at rutrum ipsum. Praesent augue quam, facilisis vitae felis vel, convallis convallis nisi. Donec maximus accumsan purus vel tempus. Aenean pretium luctus velit id fermentum. Aenean non velit non nulla interdum venenatis. Integer in libero sagittis, consequat est quis, commodo odio. Aliquam eu vulputate neque. Nunc et massa leo. Vestibulum a pretium dolor. Proin et fermentum sapien. Cras malesuada neque ac purus fermentum, a placerat quam malesuada. Quisque sollicitudin tellus a ex eleifend mattis. In vitae ipsum in mauris vestibulum imperdiet.</p>
							<p>Maecenas mollis dictum lectus quis scelerisque. Nulla at rutrum ipsum. Praesent augue quam, facilisis vitae felis vel, convallis convallis nisi. Donec maximus accumsan purus vel tempus. Aenean pretium luctus velit id fermentum. Aenean non velit non nulla interdum venenatis. Integer in libero sagittis, consequat est quis, commodo odio. Aliquam eu vulputate neque. Nunc et massa leo. Vestibulum a pretium dolor. Proin et fermentum sapien. Cras malesuada neque ac purus fermentum, a placerat quam malesuada. Quisque sollicitudin tellus a ex eleifend mattis. In vitae ipsum in mauris vestibulum imperdiet.</p>
							<hr>
							<h2>Location</h2>


							<!-- Google Map Script -->
							<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
							<script type="text/javascript">

								function initialize()
								{
									//-----------------------------------------------------------------------
									// Create an array of styles.
									
									var styles = [
										{
										"stylers": [
											{ "saturation": -100 },
											{ "gamma": 1 }
										]
										},{
											"featureType": "water",
											"stylers": [
												{ "lightness": -12 }
											]
										}
									];

									//-----------------------------------------------------------------------
									// Create a new StyledMapType object, passing it the array of styles,
									// as well as the name to be displayed on the map type control.
									
									var styledMap = new google.maps.StyledMapType(styles, {
										name: "Styled Map"
									});

									//-----------------------------------------------------------------------
									// Set up map pin position
									
									var latlng = new google.maps.LatLng(40.742284, -73.987866);

									//-----------------------------------------------------------------------
									// Set up map options

									var myOptions =
									{
										scrollwheel: false,
										zoom: 13,
										center: latlng,
										mapTypeControlOptions: {
											mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
										}
									};

									//-----------------------------------------------------------------------
									// Set up map ID's

									var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

									//-----------------------------------------------------------------------
									// Associate the styled map with the MapTypeId and set it to display.

									map.mapTypes.set('map_style', styledMap);
									map.setMapTypeId('map_style');

									//-----------------------------------------------------------------------
									// Setup up map pin image

									var image = {
										// Path to your map pin image
										url: 'images/map-marker.png',
										// This marker is 40 pixels wide by 42 pixels tall.
										size: new google.maps.Size(40, 42),
										// The origin for this image is 0,0.
										origin: new google.maps.Point(0,0),
										// The anchor for this image is the base of the pin at 20,42.
										anchor: new google.maps.Point(20, 42)
									};

									//-----------------------------------------------------------------------
									// Add marker

									var myMarker = new google.maps.Marker({
										position: latlng,
										map: map,
										icon: image,
										clickable: true,
										title:"Netvibes Inc."
									});

									myMarker.info = new google.maps.InfoWindow({
										content: "<b>Netvibes Inc.</b><br>2 Madison Avenue<br>New York City, 29478 USA"
									});

									google.maps.event.addListener(myMarker, 'click', function() {
										myMarker.info.open(map, myMarker);
									});
								}

								google.maps.event.addDomListener(window, 'load', initialize);
							</script>

							<div id="map-canvas"></div>

							<hr>
							<h2>Jobs</h2>

							<div class="jobs">
								
								
								<a href="#">
									<div class="title">
										<h5>Web Designer</h5>
										<p>Amazon Inc.</p>
									</div>
									<div class="data">
										<span class="city"><i class="fa fa-map-marker"></i>New York City</span>
										<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
										<span class="sallary"><i class="fa fa-dollar"></i>45,000</span>
									</div>
								</a>

							</div>

						</article>
					</div>
					<div class="col-sm-4" id="sidebar">
						<div class="sidebar-widget" id="share">
							<h2>Share it</h2>
							<ul>
								<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/home?status=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://plus.google.com/share?url=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.coffeecreamthemes.com/themes/jobseek/site/job-details.html&amp;title=Jobseek%20-%20Job%20Board%20Responsive%20HTML%20Template&amp;summary=&amp;source="><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<hr>
						<div class="sidebar-widget" id="widget-contact">
							<h2>Contact</h2>
							<ul>
								<li><i class="fa fa-building"></i>Netvibes</li>
								<li><i class="fa fa-map-marker"></i>2 Madison Avenue</li>
								<li><i class="fa"></i>New York City, 29478 USA</li>
								<li><i class="fa fa-phone"></i>01.22.987.8392</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:company@yourdomain.com">Send an email</a></li>
							</ul>
						</div>
					</div>
				</div>

@endsection
