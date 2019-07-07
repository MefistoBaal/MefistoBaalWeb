<!DOCTYPE html>
<html lang="es">
  <head>

    @yield('header')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{ asset ('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
  </head>

  <body>

  <div class="KW_progressContainer">
    <div class="KW_progressBar">

    </div>
  </div>
  <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/author-2.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Santiago Hurtado</a></h1>
              <ul>

                <li class="active"><a href="/"><span><small>01</small>Home</span></a></li>
                <li><a href="/about"><span><small>02</small>Resumen</span></a></li>
                <li><a href="/services"><span><small>03</small>Servicios</span></a></li>
                <li><a href="/portfolio"><span><small>04</small>Portafolio</span></a></li>
                <li><a href="/blog"><span><small>05</small>Blog</span></a></li>
                <li><a href="/contact"><span><small>06</small>Contáctame</span></a></li>
                @yield('extra_menu')

              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

  @yield('content')

      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                    <li><a href="https://twitter.com/mefistobaal96" target="_blank"><span class="icon-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/Mefisto.Baal.SH" target="_blank"><span class="icon-facebook"></span></a></li>
                    <li><a href="https://gitlab.com/mefistobaal" target="_blank"><span class="icon-gitlab"></span></a></li>
                    <li><a href="https://t.me/MefistoBaal" target="_blank"><span class="icon-telegram"></span></a></li><li><a href="https://t.me/MefistoBaal" target="_blank"><span class="icon-whatsapp"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contáctame</h2>
                <p class="h3 email"><a href="#">dasanti_12@hotmail.com</a></p>
                <p class="h3 email"><a href="#">mefistobaal96@gmail.com</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Hecho con <i class="icon-heart" aria-hidden="true" style="color: red;"></i></a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>

    <script src="{{ asset ('js/jquery.min.js')}}"></script>
    <script src="{{ asset ('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset ('js/popper.min.js')}}"></script>
    <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset ('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset ('js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset ('js/aos.js')}}"></script>
    <script src="{{ asset ('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset ('js/scrollax.min.js')}}"></script>
    <script src="{{ asset ('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset ('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset ('js/main.js')}}"></script>

    @yield('scripts')

  </body>
</html>
