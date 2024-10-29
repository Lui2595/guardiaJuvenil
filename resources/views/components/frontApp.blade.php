<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

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

    <header class="site-navbar py-4" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.html">
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
                                    <li class=""><a href={{ url('/programa#introduccion') }} class="">Nuestro programa</a></li>
                                    <li class=""><a href={{ url('/programa#a-deportiva') }} class="">Academia deportiva</a></li>
                                    <li class=""><a href={{ url('/programa#a-marcial') }} class="">Academia marcial</a></li>
                                    <li class=""><a href={{ url('/programa#a-etica') }} class="">Academia de formación ética</a></li>
                                    <li class=""><a href={{ url('/programa#a-auxilios') }} class="">Academia de primeros auxilios</a></li>
                                    <li class=""><a href={{ url('/programa#a-campismo') }} class="">Academia de campismo y excursionismo</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/noticias') }}" class="nav-link">Noticias</a></li>
                            <li><a href="{{ url('/login') }}" class="nav-link">Ingresar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!--Encabezado del view-->
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

    <footer class="container-fluid  pt-3 bg-dark">
        <div class="row">
            <h4>Guardia Juvenil Nacional, A. C.</h4>
        </div>
        <div class="row">
            <div class="col-3">
                <p><strong class="text-white d-block">Direccion</strong>
                    Abasolo 1419 B <br> Saltillo, Coah., México</p<>
            </div>
            <div class="col-3">
                <p><strong class="text-white d-block">Email</strong>
                    <a href="#">guardiamexico@gmail.com</a></p>
            </div>
            <div class="col-3">
                <p><strong class="text-white d-block">
                    Celular
                    </strong>
                    <a href="#">+52 844 552 5550</a></p>
            </div>
            <div class="col-3 text-end">
                <p><span class="text-white d-block">Sitio web desarrollado por: </span>Heintec</p>
            </div>
        </div>
    </footer>

</body>
@section('scripts')

@endsection
</html>
