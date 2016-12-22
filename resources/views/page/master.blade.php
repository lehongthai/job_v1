<!DOCTYPE html>
<html>
  
<!-- Mirrored from coffeecreamthemes.com/themes/jobseek/site/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2015 04:51:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/favicon.png">

     <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

    <!-- Main Stylesheet -->
    <link href="{!! url('public/page') !!}/css/style.css" rel="stylesheet">
    <link href="{!! url('public/admin') !!}/dist/css/select2.min.css" rel="stylesheet">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{!! url('public/page') !!}/js/jquery-1.11.2.min.js"></script>
    

    <!-- Bootstrap Plugins -->
    <script src="{!! url('public/page') !!}/js/bootstrap.min.js"></script>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body id="home">


    <!-- ============ PAGE LOADER START ============ -->

    <div id="loader">
      <i class="fa fa-cog fa-4x fa-spin"></i>
    </div>

    <!-- ============ PAGE LOADER END ============ -->

    <!-- ============ NAVBAR START ============ -->

    <div class="fm-container">
      <!-- Menu -->
       @include('page.blocks.sub_menu')
      <!-- end Menu -->
    </div>

    <!-- ============ NAVBAR END ============ -->

    <!-- ============ HEADER START ============ -->

    <header style="line-height: 20px">
      <div id="header-background"></div>
      <div class="container" id="menu-custom">
      <div id="menu-open" class="pull-right"><a class="link-register">Register</a> | <a class="link-login">Login</a></div>
        <div class="text-center-custom">
          <a href="#">Quản lý</a>&nbsp; <i class="fa fa-forward" aria-hidden="true"></i> &nbsp;
          <a href="#">Sinh Viên</a>&nbsp; <i class="fa fa-forward" aria-hidden="true"></i> &nbsp;
          <a href="#">Phổ Thông</a>&nbsp; <i class="fa fa-forward" aria-hidden="true"></i> &nbsp;
          <a href="#">Chuyên Môn</a>
        </div>
        <div id="menu-open" class="pull-left">
          <a class="fm-button"><i class="fa fa-bars fa-lg"></i></a>
        </div>
      </div>
    </header>

    <!-- ============ HEADER END ============ -->

<!-- =============== HEADER MENU ============ -->
<div class="menu-top-job">
  <div class="container">
    <div class="row" style="margin-top: 10px">    
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-primary dropdown-toggle search-custom" data-toggle="dropdown" style="min-width: 150px">
                      <span id="search_concept">Khu Vực</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Hồ Chí Minh</a></li>
                      <li><a href="#its_equal">Hà Nội</a></li>
                      <li><a href="#greather_than">Đà Nẵng</a></li>
                      <li><a href="#less_than">Hải Phòng</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Tất Cả</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control search-custom" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-primary search-custom" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
  </div>
  </div>
</div>
<!-- =============== END HEADER MENU ============ -->

    <!-- ============ SLIDES START ============ -->
<div class="container">
  @yield('newsJobs')
<div class="row" style="margin-top: 10px">
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    
  {{-- slider --}}

  @yield('slider')

  {{-- end slider --}}
    
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    @yield('colRight')
    </div>
</div>
</div>
    <!-- ============ SLIDES END ============ -->

    <!-- ============ JOBS START ============ -->

    <section id="jobs">
      <div class="container">

        
             @yield('content')
          
      </div>
    </section>

    <!-- ============ JOBS END ============ -->

    <!-- ============ COMPANIES START ============ -->

    @yield('companies')

    <!-- ============ COMPANIES END ============ -->

    <!-- ============ STATS START ============ -->

    @yield('stats')

    <!-- ============ STATS END ============ -->

    <!-- ============ CLIENTS START ============ -->

    @yield('clients')

    <!-- ============ CLIENTS END ============ -->

    @include('page.blocks.footer')

    <!-- Modernizr Plugin -->
    <script src="{!! url('public/page') !!}/js/modernizr.custom.79639.js"></script>

  

    <!-- Retina Plugin -->
    <script src="{!! url('public/page') !!}/js/retina.min.js"></script>

    <!-- ScrollReveal Plugin -->
    <script src="{!! url('public/page') !!}/js/scrollReveal.min.js"></script>

    <!-- Flex Menu Plugin -->
    <script src="{!! url('public/page') !!}/js/jquery.flexmenu.js"></script>

    <!-- Slider Plugin -->
    <script src="{!! url('public/page') !!}/js/jquery.ba-cond.min.js"></script>
    <script src="{!! url('public/page') !!}/js/jquery.slitslider.js"></script>

    <!-- Carousel Plugin -->
    <script src="{!! url('public/page') !!}/js/owl.carousel.min.js"></script>

    <!-- Parallax Plugin -->
    <script src="{!! url('public/page') !!}/js/parallax.js"></script>

    <!-- Counterup Plugin -->
    <script src="{!! url('public/page') !!}/js/jquery.counterup.min.js"></script>
    <script src="{!! url('public/page') !!}/js/waypoints.min.js"></script>

    <!-- No UI Slider Plugin -->
    <script src="{!! url('public/page') !!}/js/jquery.nouislider.all.min.js"></script>

    <!-- Bootstrap Wysiwyg Plugin -->
    <script src="{!! url('public/page') !!}/js/bootstrap-wysiwyg.js"></script>
    <script src="{!! url('public/page') !!}/js/jquery.hotkeys.js"></script>

    <!-- Flickr Plugin -->
    <script src="{!! url('public/page') !!}/js/jflickrfeed.min.js"></script>

    <!-- Fancybox Plugin -->
    <script src="{!! url('public/page') !!}/js/fancybox.pack.js"></script>

    <!-- Magic Form Processing -->
    <script src="{!! url('public/page') !!}/js/magic.js"></script>

    <!-- jQuery Settings -->
    <script src="{!! url('public/page') !!}/js/settings.js"></script>
    <script src="{!! url('public/admin') !!}/js/select2.min.js"></script>
    <script src="{!! url('public/page') !!}/js/myscript.js"></script>
    @yield('javascript')

 <div class="cart-tab visible">      
    <a href="#" title="View your shopping cart" class="cart-link">
      <span class="amount"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
    </a>
    <div class="cart">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftratramtinhhoatudatme%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=304826193212959" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div><!-- end .cart -->
  </div><!-- end .cart-tab -->
  <a href="#" id="back-to-top" title="Back to top"><strong>&uarr;</strong></a>

  <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58477dcfe205551f"></script> 
@if($errors->first('fullname') != NULL || $errors->first('email') != NULL || $errors->first('username') != NULL || $errors->first('password') != NULL || $errors->first('password_confirmation') != NULL)
<script type="text/javascript">
    $("#register").fadeIn(300);
    $("body").addClass("no-scroll");
</script>
@endif
@if($errors->first('usernameLogin') != NULL || $errors->first('passwordLogin') != NULL)
<script type="text/javascript">
    $("#login").fadeIn(300);
    $("body").addClass("no-scroll");
</script>
@endif


</body>

<!-- Mirrored from coffeecreamthemes.com/themes/jobseek/site/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2015 04:52:47 GMT -->
</html>