<?php
use App\Info;
$seo = Info::getSeo();
?>

@extends('page.master')

@section('title', $seo->title)
@section('description', $seo->meta_desc)
@section('keywords', $seo->meta_key)

{{-- Start Slider --}}
@section('slider')
@include('page.blocks.slider')
@endsection
{{-- End Slider --}}

{{-- Start News Jobs --}}
@section('newsJobs')
@include('page.blocks.news_job')
@endsection
{{-- End News Jobs --}}

{{-- Start colRight --}}
@section('colRight')
@include('page.blocks.colRight')
@endsection
{{-- End colRight --}}

@section('content')
<div class="row">
          <div class="col-sm-8">
  <div role="tabpanel">

              <!-- Nav pills -->
              <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active"><a href="#work" aria-controls="work" role="tab" data-toggle="tab">Work</a></li>
                <li role="presentation"><a href="#fun" aria-controls="fun" role="tab" data-toggle="tab">Fun</a></li>
                <li role="presentation"><a href="#life" aria-controls="life" role="tab" data-toggle="tab">Life</a></li>
                <li role="presentation"><a href="#life2" aria-controls="life" role="tab" data-toggle="tab">Life 2</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="work">
                  <h2>Recent Jobs</h2>

            <div class="jobs">
              
              <!-- Job offer 1 -->
              <a href="#">
                <div class="featured"></div>
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
              
              <!-- Job offer 2 -->
              <a href="#">
                <div class="featured"></div>
                <div class="title">
                  <h5>Senior Web Developer</h5>
                  <p>Dropbox Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Los Angeles</span>
                  <span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>85,000</span>
                </div>
              </a>
              
              <!-- Job offer 3 -->
              <a href="#">
                <div class="title">
                  <h5>Project Manager</h5>
                  <p>Apple Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>San Francisco</span>
                  <span class="type freelance"><i class="fa fa-clock-o"></i>Freelance</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>60,000</span>
                </div>
              </a>
              
              <!-- Job offer 4 -->
              <a href="#">
                <div class="title">
                  <h5>Key Account Manager</h5>
                  <p>Dell Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Boston</span>
                  <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>55,000</span>
                </div>
              </a>
              
              <!-- Job offer 5 -->
              <a href="#">
                <div class="title">
                  <h5>Front End Developer</h5>
                  <p>Ebay Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Chicago</span>
                  <span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>75,000</span>
                </div>
              </a>
              
              <!-- Job offer 6 -->
              <a href="#" class="hidden-job">
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
              
              <!-- Job offer 7 -->
              <a href="#" class="hidden-job">
                <div class="title">
                  <h5>Senior Web Developer</h5>
                  <p>Dropbox Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Los Angeles</span>
                  <span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>85,000</span>
                </div>
              </a>
              
              <!-- Job offer 8 -->
              <a href="#" class="hidden-job">
                <div class="title">
                  <h5>Project Manager</h5>
                  <p>Apple Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>San Francisco</span>
                  <span class="type freelance"><i class="fa fa-clock-o"></i>Freelance</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>60,000</span>
                </div>
              </a>
              
              <!-- Job offer 9 -->
              <a href="#" class="hidden-job">
                <div class="title">
                  <h5>Key Account Manager</h5>
                  <p>Dell Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Boston</span>
                  <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>55,000</span>
                </div>
              </a>
              
              <!-- Job offer 10 -->
              <a href="#" class="hidden-job">
                <div class="title">
                  <h5>Front End Developer</h5>
                  <p>Ebay Inc.</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Chicago</span>
                  <span class="type part-time"><i class="fa fa-clock-o"></i>Part Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>75,000</span>
                </div>
              </a>

            </div>

            <a class="btn btn-primary" id="more-jobs">
              <span class="more">Show More Jobs <i class="fa fa-arrow-down"></i></span>
              <span class="less">Show Less Jobs <i class="fa fa-arrow-up"></i></span>
            </a>
                </div>
                <div role="tabpanel" class="tab-pane" id="fun">
                  <p>Donec sodales nunc libero, placerat finibus felis suscipit a. Vestibulum dignissim augue non urna porta posuere. Nam aliquet augue nec orci porttitor posuere. Nunc egestas pulvinar est bibendum hendrerit.</p>
                </div>
                <div role="tabpanel" class="tab-pane" id="life">
                  <p>Nulla tempor non quam eget semper. Mauris ut purus ut lectus pharetra laoreet. Sed vulputate turpis quis mauris ultricies elementum. Donec quis ullamcorper neque.</p>
                </div>
                <div role="tabpanel" class="tab-pane" id="life2">
                  <p>Nulla tempor non quam eget semper. Mauris ut purus ut lectus pharetra laoreet. Sed vulputate turpis quis mauris ultricies elementum. Donec quis ullamcorper neque.</p>
                </div>
              </div>

            </div>

</div>
          <div class="col-sm-4">
<div>
            <h2>Nhà tuyển dụng nổi bật</h2>
            <a href="#">
              <img src="images/featured-job.jpg" alt="Featured Job" class="img-responsive" />
              <div class="featured-job">
                <img src="images/job1.jpg" alt="" class="img-circle" />
                <div class="title">
                  <h5>Web Designer</h5>
                  <p>Amazon</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>New York City</span>
                  <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>45,000</span>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tristique euismod lorem, a consequat orci consequat a. Donec ullamcorper tincidunt nunc, ut aliquam est pellentesque porta. In neque erat, malesuada sit amet orci ac, laoreet laoreet mauris.</div>
              </div>
            </a>
            </div>
            <div>
            <hr>
            <a href="#">
              <img src="images/featured-job.jpg" alt="Featured Job" class="img-responsive" />
              <div class="featured-job">
                <img src="images/job1.jpg" alt="" class="img-circle" />
                <div class="title">
                  <h5>Web Designer</h5>
                  <p>Amazon</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>New York City</span>
                  <span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>45,000</span>
                </div>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tristique euismod lorem, a consequat orci consequat a. Donec ullamcorper tincidunt nunc, ut aliquam est pellentesque porta. In neque erat, malesuada sit amet orci ac, laoreet laoreet mauris.</div>
              </div>
            </a>
            </div>
</div>
</div>
@endsection


{{-- DOANH NGHIỆP TUYỂN DỤNG --}}
@section('companies')
@include('page.blocks.companies')
@endsection
{{-- END DOANH NGHIỆP TUYỂN DỤNG --}}


{{-- JOBSEEK STATS --}}
@section('stats')
@include('page.blocks.stats')
@endsection
{{-- END JOBSEEK STATS --}}

{{-- Start Client --}}
@section('clients')
@include('page.blocks.clients')
@endsection
{{-- END Client --}}