@extends('components.frontApp')

@section('content')

    <div class="site-section">
        <div class="container">
            <p id="content">Contenido de la página de noticias</p>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="frontTheme/js/jquery-3.3.1.min.js"></script>
    <script src="frontTheme/js/jquery.countdown.min.js"></script>
    <script src="frontTheme/js/jquery.easing.1.3.js"></script>
    <script src="frontTheme/js/jquery.fancybox.min.js"></script>
    <script src="frontTheme/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="frontTheme/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="frontTheme/js/jquery.stellar.min.js"></script>
    <script src="frontTheme/js/jquery.sticky.js"></script>
    <script src="frontTheme/js/jquery-ui.js"></script>
    {{-- <script src="frontTheme/js/jquery-3.6.0.min.js"></script> --}}
    <script src="frontTheme/js/popper.min.js"></script>
    <script src="frontTheme/js/bootstrap.min.js"></script>
    <script src="frontTheme/js/bootstrap-datepicker.min.js"></script>
    <script src="frontTheme/js/owl.carousel.min.js"></script>
    <script src="frontTheme/js/aos.js"></script>
    <script src="frontTheme/js/main.js"></script>
    <script>

        $(document).ready(function () {
            $("#encabezado").append("Noticias");
        });

    </script>
@endsection
