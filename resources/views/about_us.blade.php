@extends('layouts.frontApp')

@section('content')

    <div class="site-section">
        <div class="container">

            {{-- Contenido de esta view --}}
            <main>
                <article>
                    <h2>Quienes somos</h2>
                    <p>Guadia Juvenil Nacional, A. C. somos una organización de la socieddad civil con presencia nacional incorporada a la <b>Federación Nacional de Asociaciones de Alta Disciplina (<abbr title="Federación Nacional de Asociaciones de Alta Disciplina">FNAAD</abbr>)</b>.</p>
                </article>
                <article>
                    <h2>Nuestar misión</h2>
                    <p>Colaborar, con los planteles educativos, en la formación integral de los jóvenes.</p>
                </article>
                <article>
                    <h2>¿Por qué lo hacemos?</h2>
                    <p>¿Porque los jóvenes lo necesitan.</p>
                </article>
            </main>

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
            $("#encabezado").append("Acerca de nosotros");
        });

    </script>

@endsection
