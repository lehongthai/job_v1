@extends('page.master')
@section('content')

@include('page.blocks.loginInline')

<section id="jobs" style="margin-top: -180px">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h2>Candidates</h2>

            <div class="jobs">
              
              <!-- Job offer 5 -->
              <a href="#">
                <div class="title">
                  <h5>Grace Bailey</h5>
                  <p>Sales Manager</p>
                </div>
                <div class="data">
                  <span class="city"><i class="fa fa-map-marker"></i>Chicago</span>
                  <span class="experience"><i class="fa fa-trophy"></i>7 years</span>
                  <span class="sallary"><i class="fa fa-dollar"></i>75,000</span>
                </div>
              </a>
              

            </div>

            <nav>
              <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
              </ul>
            </nav>

          </div>
          <div class="col-sm-4" id="sidebar">

            <!-- Find a Job Start -->
            <div class="sidebar-widget" id="jobsearch">
              <h2>Find a Candidate</h2>
              <form>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group" id="job-search-group">
                      <label for="job-search" class="sr-only">Search</label>
                      <input type="text" class="form-control" id="job-search" placeholder="Type and press enter">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <h5>Career Level</h5>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> All Types
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Junior
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Middle
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Senior
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Expert
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Presence</h5>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> All Types
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remote
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Office
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Relocation
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Travel a lot
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <h5>Job Type</h5>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> All Types
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Freelance
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Part Time
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Full Time
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Internship
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Volunteer
                      </label>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Location</h5>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> All Types
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> New York
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Los Angeles
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> San Francisco
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Chicago
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Boston
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <h5>Experience</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <p>More than <b><span id="years-field"></span></b> years</p>
                  </div>
                  <div class="col-xs-6">
                    <div class="form-slider" id="years"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <h5>Salary</h5>
                    <div class="form-slider" id="salary"></div>
                    <p>From <b><span id="salary-field-lower"></span></b> to  <b><span id="salary-field-upper"></span></b></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <a class="btn btn-primary">Reset All Filters</a>
                  </div>
                </div>
              </form>
            </div>
            <!-- Find a Job End -->

          </div>
        </div>
      </div>
    </section>

@endsection
