<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="frontTheme/fonts/icomoon/style.css">

    <link rel="stylesheet" href="frontTheme/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="frontTheme/css/jquery-ui.css">
    <link rel="stylesheet" href="frontTheme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontTheme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontTheme/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="frontTheme/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="frontTheme/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="frontTheme/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="frontTheme/css/aos.css">

    <link rel="stylesheet" href="frontTheme/css/style.css">
</head>

<body>
    <!--Site wrapper-->
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body "></div>
        </div>

        <!--Barra de navegación-->
        <header class="site-navbar py-4" role="banner">

            <div class="container">
              <div class="d-flex align-items-center">
                <div class="site-logo" >
                  <a href="index.html">
                    <img src="frontTheme/images/logo.png" alt="Logo" style="max-height: 100px;">
                  </a>
                </div>
                <div class="ml-auto">
                  <nav class="site-navigation position-relative text-right " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                      <li><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
                      <li><a href="{{ url('/about') }}" class="nav-link">Acerca de nosotros</a></li>
                      <li><a href="{{ url('/programa') }}" class="nav-link">Programa</a></li>
                      <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                    </ul>
                  </nav>

                  <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                      class="icon-menu h3 text-white"></span></a>
                </div>
              </div>
            </div>

        </header>

        <!--Encabezado del view-->
        <div class="hero overlay" style="background-image: url('frontTheme/images/bg_3.jpg');">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-9 mx-auto text-center">
                  <h1 class="text-white">NUESTRO PROGRAMA</h1>
                </div>
              </div>
            </div>
        </div>

        {{-- Contenido de esta view --}}

        {{-- Fin del contenido de la view --}}

        <footer>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <strong class="text-white d-block">Direccion</strong>
                    Abasolo 1419 B <br> Saltillo, Coah., México
                </li>
                <li class="mb-2">
                    <strong class="text-white d-block">Email</strong>
                    <a href="#">guardiamexico@gmail.com</a>
                </li>
                <li class="mb-2">
                    <strong class="text-white d-block">
                    Celular
                    </strong>
                    <a href="#">+52 844 552 5550</a>
                </li>
            </ul>
        </footer>
    </div>

    <!--Scripts-->
    <script src="frontTheme/js/jquery-3.3.1.min.js"></script>
    <script src="frontTheme/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="frontTheme/js/jquery-ui.js"></script>
    <script src="frontTheme/js/popper.min.js"></script>
    <script src="frontTheme/js/bootstrap.min.js"></script>
    <script src="frontTheme/js/owl.carousel.min.js"></script>
    <script src="frontTheme/js/jquery.stellar.min.js"></script>
    <script src="frontTheme/js/jquery.countdown.min.js"></script>
    <script src="frontTheme/js/bootstrap-datepicker.min.js"></script>
    <script src="frontTheme/js/jquery.easing.1.3.js"></script>
    <script src="frontTheme/js/aos.js"></script>
    <script src="frontTheme/js/jquery.fancybox.min.js"></script>
    <script src="frontTheme/js/jquery.sticky.js"></script>
    <script src="frontTheme/js/jquery.mb.YTPlayer.min.js"></script>


    <script src="frontTheme/js/main.js"></script>


</body>

</html>
