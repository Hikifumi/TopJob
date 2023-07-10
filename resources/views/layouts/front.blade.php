<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('') }}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ url('') }}/assets/img/favicon.png">
  <title>
    TopJob
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ url('') }}/assets-front/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ url('') }}/assets-front/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ url('') }}/assets-front/css/font-awesome.css" rel="stylesheet" />
  <link href="{{ url('') }}/assets-front/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ url('') }}/assets-front/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../index.html">
        <img src="{{ url('') }}/topjob.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../../index.html">
                <img src="{{ url('') }}/assets-front/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="{{ route('joblist') }}" data-toggle="tooltip" title="Follow us on Instagram">
                    <span class="nav-link-inner--text">Jobs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="{{ route('profile') }}" data-toggle="tooltip" title="Follow us on Instagram">
                    <span class="nav-link-inner--text">Profile</span>
                </a>
            </li>
            @auth
            @if(Auth::user()->role_name === 'admin')
            <li class="nav-item">
                <a class="nav-link nav-link-icon" href="{{ route('dashboard') }}" data-toggle="tooltip" title="Follow us on Instagram">
                    <span class="nav-link-inner--text">Admin</span>
                </a>
            </li>
            @endif
            @endauth
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          @guest
          <li class="nav-item">
            <a class="btn btn-neutral" href="{{  route('login') }}">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-neutral" href="{{  route('register') }}">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a class="btn btn-neutral" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-3 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1">Find and Apply for Your Dream Job!</h1>
                <h2 class="display-4 font-weight-normal text-white">The time is right now!</h2>
                <div class="btn-wrapper mt-4">
                  <a href="{{ route('joblist') }}" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="fa fa-search"></i></span>
                    <span class="btn-inner--text">Find Now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-primary badge-pill mb-3">TopJob</span>
            <h3 class="display-3">Search and Apply for Jobs Easily</h3>
          </div>
        </div>
        @yield('content')
      </div>
    </div>
    <br /><br />
    <footer class="footer">
      <div class="container">
        <div class="row row-grid align-items-center mb-5">
          <div class="col-lg-6">
            <h3 class="text-primary font-weight-light mb-2">TopJob</h3>
          </div>
          <div class="col-lg-6 text-lg-center btn-wrapper">
            <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
            </button>
            <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
            </button>
            <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
            </button>
            <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
              <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
            </button>
          </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('') }}/assets-front/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="{{ url('') }}/assets-front/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{ url('') }}/assets-front/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{ url('') }}/assets-front/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ url('') }}/assets-front/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ url('') }}/assets-front/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="{{ url('') }}/assets-front/js/plugins/moment.min.js"></script>
  <script src="{{ url('') }}/assets-front/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="{{ url('') }}/assets-front/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{ url('') }}/assets-front/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>
