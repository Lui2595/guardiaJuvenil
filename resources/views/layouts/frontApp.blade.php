<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Guardia Juvenil Saltillo</title>
    <link rel="shortcut icon" type="image/x-icon" href="frontTheme/images/logo.png" style="max-height: 15px;">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontTheme/fonts/flaticon/font/flaticon.css">
    <!--icons-->
    <link rel="stylesheet" href="frontTheme/fonts/icomoon/style.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="frontTheme/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="frontTheme/css/bootstrap-datepicker.css">
    <!--JQuery-->
    <link rel="stylesheet" href="frontTheme/css/jquery-ui.css">
    <link rel="stylesheet" href="frontTheme/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="frontTheme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontTheme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontTheme/css/aos.css">
    <link rel="stylesheet" href="frontTheme/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>


    <!--Scripts-->
    <script src="{{ asset('/frontTheme/js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{ asset('/frontTheme/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/jquery-ui.js') }}"></script>
    {{-- <script src="{{ asset('/frontTheme/js/page-title.js') }}"></script> --}}
    <script src="{{ asset('/frontTheme/js/popper.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/aos.js') }}"></script>
    <script src="{{ asset('/frontTheme/js/main.js') }}"></script>


</head>

<body>
     <!--Mobile Menu (necesario reparar)-->
     <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body "></div>
    </div>

    <!--Encabezado-->
    <header class="site-navbar py-4" role="banner">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="{{ url('/home') }}">
                        <img src="frontTheme/images/logo.png" alt="Logo" style="max-height: 100px;">
                    </a>
                </div>
                <div class="ml-auto">
                    <nav class="site-navbar site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li>
                                <a href="{{ url('/home') }}" class="nav-link">Inicio</a>
                            </li>
                            {{-- Plantilla de nuevo enlace: <li><a href="{{ url('/') }}" class="nav-link"></a></li> --}}
                            <li><a href="{{ url('/about') }}" class="nav-link">Acerca de nosotros</a></li>
                            <li class="has-children">
                                <a href="{{ url('/about') }}">Programa</a>
                                <ul class="dropdown" id="submenuPrograma">
                                    <li class=""><a href="{{ url('/programa') }}#introduccion" class="">Nuestro programa</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-deportiva" class="">Academia deportiva</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-marcial" class="">Academia marcial</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-etica" class="">Academia de formación ética</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-auxilios" class="">Academia de primeros auxilios</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-campismo" class="">Academia de campismo y excursionismo</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/noticias') }}" class="nav-link">Blog</a></li>
                            <li><a href="{{ url('/registro') }}" class="nav-link">Solicitud de registro</a></li>
                            <li><a href="{{ url('/login') }}" class="nav-link">Ingresar</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!--Banner del encabezado-->
    <div class="hero overlay" style="background-image: url('frontTheme/images/bg_3.jpg'); max-height: 100px;">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-9 mx-auto text-center">
                    <h1 id="encabezado" class="text-white">Guardia Juvenil</h1>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Programa formativo</h3>
                        <ul class="list-unstyled links">
                            <li class=""><a href="{{ url('/programa') }}#introduccion" class="">Nuestro programa</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-deportiva" class="">Academia deportiva</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-marcial" class="">Academia marcial</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-etica" class="">Academia de formación ética</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-auxilios" class="">Academia de primeros auxilios</a></li>
                                    <li class=""><a href="{{ url('/programa') }}#a-campismo" class="">Academia de campismo y excursionismo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Contáctanos</h3>
                        <ul class="list-unstyled links">
                            <li><a mailto="guardiamexico@gmail.com">Correo electrónico</a></li>
                            <li><a href="tel:+52 844 552 5550">Teléfono</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <widget class="widget mb-3">
                        <h3>Destacamentos</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Biblioparque sur</a></li>
                        </ul>
                    </widget>
                </div>
                <div class="col-lg-3">
                    <div class="widget mb-3">
                        <h3>Redes sociales</h3>
                        <ul class="list-unstyled links">
                            <li><a href="https://www.facebook.com/Guardia-Juvenil-Saltillo-100064565477349/">Facebook</a></li>
                            <li><a href="https://wa.me/528445525550">Whatsapp</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="pt-5">
                        <p>Sitio web desarrollado por Heintec</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- @stack('titulo') --}}
</body>

<!--Scripts-->
<script src="{{ asset('/frontTheme/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('/frontTheme/js/jquery-ui.js') }}"></script>
<script src="{{ asset('/frontTheme/js/popper.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/frontTheme/js/aos.js') }}"></script>
<script src="{{ asset('/frontTheme/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</html>
