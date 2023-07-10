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
      <a class="navbar-brand mr-lg-5" href="/">
        <img src="{{ url('') }}/topjob.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/">
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
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
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
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section bg-secondary">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="text-center mt-5">
              <h3>{{ $data->posisi }}</h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{ $data->lokasi }}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Company</div>
              <div><i class="ni education_hat mr-2"></i>{{ $data->perusahaan }}</div>
            </div>
            <div class="mt-5 py-5 border-top">
              <div class="row ">
                <div class="col-lg-12">
                  <h3>Description : </h3>
                  <div>{!! $data->deskripsi !!}</div>
                </div>
              </div>
              <div class="row ">
                <div class="col-lg-12">
                  <h3>Condition : </h3>
                  <div>{!! $data->persyaratan !!}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=" bg-secondary">
        <div class="container">
            @if (session('alert-success'))
            <div class="alert alert-success">
                {{ session('alert-success') }}
            </div>
         @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('app.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="pelamar_id" value="{{  Auth::user()->id }}">
                        <input type="hidden" name="lowongan_pekerjaan_id" value="{{  $data->id }}">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Position</label>
                          <input type="text" name="posisi" required value="{{ old('posisi') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Apply Now</button>
                            </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">

        <hr>

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
