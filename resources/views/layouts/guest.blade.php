<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revolve - Personal Magazine blog Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('ui/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Themify -->
    <link rel="stylesheet" href="{{ asset('ui/plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/plugins/slick-carousel/slick.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('ui/plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/plugins/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui/plugins/magnific-popup/magnific-popup.css') }}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('ui/css/style.css') }}">
</head>
<body>

<header class="header-top bg-dark py-4">
  <div class="container">
      <nav class="navbar navbar-expand-lg navigation menu-white">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('ui/images/logo-w.png') }}" alt="" class="img-fluid">
            </a>

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="ti-menu  text-white"></span>
            </button>

              <div class="collapse navbar-collapse" id="navbar-collapse">
                  <ul class="menu navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="{{route('categories')}}" class="nav-link">Category</a></li>
                      <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="{{route('contact-us')}}" class="nav-link">Contact</a></li>
                  </ul>
              <div class="text-lg-right search ml-4">
                <div class="search_toggle"><i class="ti-search text-white"></i></div>
              </div>
         </div>
      </nav>
  </div>
</header>

<!--search overlay start-->
  <div class="search-wrap">
      <div class="overlay">
          <form action="#" class="search-form">
              <div class="container">
                  <div class="row">
                      <div class="col-md-10 col-9">
                          <input type="text" class="form-control" placeholder="Search..."/>
                      </div>
                      <div class="col-md-2 col-3 text-right">
                          <div class="search_toggle toggle-wrap d-inline-block">
                              <i class="ti-close"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
  <!--search overlay end-->


@yield('section')

<!--footer start-->
<footer class="footer-section bg-grey">
    <div class="instagram-photo-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Follow in Instagram</h4>
            </div>
        </div>

        <div class="row no-gutters" id="instafeed">
				
          </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
               <p class="copyright">© Copyright 2019 - Revolve. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{ asset('ui/plugins/jquery/jquery.js') }}"></script>
<!-- Bootstrap jQuery -->
<script src="{{ asset('ui/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('ui/plugins/bootstrap/js/popper.min.js') }}"></script>
<!-- Owl caeousel -->
<script src="{{ asset('ui/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('ui/plugins/slick-carousel/slick.min.js') }}"></script>
<script src="{{ asset('ui/plugins/magnific-popup/magnific-popup.js') }}"></script>
<!-- Instagram Feed Js -->
<script src="{{ asset('ui/plugins/instafeed-js/instafeed.min.js') }}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{ asset('ui/plugins/google-map/gmap.js') }}"></script>
<!-- main js -->
<script src="{{ asset('ui/js/custom.js') }}"></script>


</body>
</html>