<!DOCTYPE html>
<html lang="en">


<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Cholo Jai</title>

    
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/blue.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/rateit.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap-select.min.css') }}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    @yield('css')
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="{{ route('my-account') }}"><i class="icon fa fa-user"></i>My Account</a></li>
           
            <li><a href="{{route('user-auth') }}"><i class="icon fa fa-lock"></i>Login</a></li>
          </ul>
        </div>
        
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>

  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class=" col-md-3  top-search-holder"> 
          {{-- <h1>CHOLO JAI</h1> --}}
          <img src="{{ asset('images/biz/Cholo Jai.png') }}" width="150" height="120"/>
        </div>
       <br>
        <div class=" col-md-6 top-search-holder"> 
          <div class="search-area">
            <form action="{{ route('search')}}" method="post">
              @csrf
              <div class="control-group">
                <input class="search-field col-10" name="search" placeholder="Search here..." />
                <button class="search-button col-2" type="submit" ></button> </div>
            </form>
          </div>
         </div>
         
      </div>
      <!-- /.row --> 

      
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">

                <li class="dropdown"> <a href="{{route('/')}}">Home</a> </li>
                <li class="dropdown"> <a href="{{route('message-page')}}">Message</a> </li>

                {{-- <li class="dropdown"> <a href="venue.html">Venues</a> </li> --}}
                <li class="dropdown"> <a href="{{ route('about') }}">About </a> </li>
               
             
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END  -->

@yield('content')
{{-- messenger chat --}}
<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Get In Touch</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>Mirpur 13, Dhaka-1216</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>+(888)016111111111<br>
                  </p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#">dipu@cholo.com</a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>

  
  </div>
</footer>

<script src=" {{ asset('assets/js/jquery-1.11.1.min.js') }}"></script> 
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script> 
<script src=" {{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src=" {{ asset('assets/js/owl.carousel.min.js') }}"></script> 
<script src=" {{ asset('assets/js/echo.min.js ') }}"></script> 
<script src=" {{ asset('assets/js/jquery.easing-1.3.min.js') }}"></script> 
<script src=" {{ asset('assets/js/bootstrap-slider.min.js') }}"></script> 
<script src=" {{ asset('assets/js/jquery.rateit.min.js') }}"></script> 
<script src=" {{ asset('assets/js/lightbox.min.js') }}"></script> 
<script src=" {{ asset('assets/js/bootstrap-select.min.js') }}"></script> 
<script src=" {{ asset('assets/js/wow.min.js') }}"></script> 
<script src=" {{ asset('assets/js/scripts.js') }}"></script>
@yield('js')


</body>

</html>