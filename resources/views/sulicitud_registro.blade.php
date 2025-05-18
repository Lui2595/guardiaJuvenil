<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  >

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

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

</head>

<body>

  <div class="site-wrap">

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
          <div class="site-logo" >
            <a href="index.html">
              <img src="frontTheme/images/logo.png" alt="Logo" style="max-height: 100px;">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right " role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
                <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                {{-- <li><a href="players.html" class="nav-link">Players</a></li>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="active"><a href="contact.html" class="nav-link">Contact</a></li> --}}
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('frontTheme/images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">Formato de Registro</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <form action="{{ route('elementos.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="unidad">Unidad</label>
                <select name="unidad" id="unidad" class="form-select" required>
                    <option value="">Seleccione una unidad</option>
                    <option value="Biblioparque" {{ old('unidad') == 'Biblioparque' ? 'selected' : '' }}>Biblioparque</option>
                    <option value="Cecytec Sur" {{ old('unidad') == 'Cecytec Sur' ? 'selected' : '' }}>Cecytec Sur</option>
                    <option value="CBTis 97" {{ old('unidad') == 'CBTis 97' ? 'selected' : '' }}>CBTis 97</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
              </div>
              <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno" id="apellido_paterno" value="{{ old('apellido_paterno') }}" required>
              </div>
              <div class="form-group">
                <label for="apellido_materno">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno" id="apellido_materno" value="{{ old('apellido_materno') }}" required>
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" placeholder="Edad" name="edad" id="edad" value="{{ old('edad') }}" required min="1" max="100">
              </div>
              {{-- <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
              </div> --}}
              <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" placeholder="Celular" name="celular" id="celular" value="{{ old('celular') }}" required>
              </div>
              <div class="form-group">
                <label for="escuela">Escuela</label>
                <input type="text" class="form-control" placeholder="Escuela" name="escuela" id="escuela" value="{{ old('escuela') }}" required>
              </div>
              <div class="form-group">
                <label for="grado">Grado Escolar</label>
                <input type="text" class="form-control" placeholder="Grado Escolar" name="grado" id="grado" value="{{ old('grado') }}" required>
              </div>
              <div class="form-group">
                <label for="grupo">Grupo Escolar</label>
                <input type="text" class="form-control" placeholder="Grupo Escolar" name="grupo" id="grupo" value="{{ old('grupo') }}" required>
              </div>
              {{-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Promedio Escolar " name="promedio" id="promedio" value="{{ old('promedio') }}">
              </div> --}}
              {{-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Materia Favorita" name="materia_favorita" id="materia_favorita" value="{{ old('materia_favorita') }}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Deporte Favorito" name="deporte_favorito" id="deporte_favorito" value="{{ old('deporte_favorito') }}">
              </div> --}}
              {{-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook" value="{{ old('facebook') }}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" value="{{ old('instagram') }}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="TikTok" name="tiktok" id="tiktok" value="{{ old('tiktok') }}">
              </div>
              <div class="form-group">
                <label for="lesion">¿Haz sufrido alguna lesión en los últimos 3 meses?</label>
                <select name="lesion" id="lesion" class="form-select" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si" {{ old('lesion') == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ old('lesion') == 'No' ? 'selected' : '' }}>No</option>
                </select>
              </div> --}}
              {{-- <div class="form-group">
                <label for="alergia">¿En que parte fue la lesión?</label>
                <textarea class="form-control" placeholder="Lesion Detalle" name="detalle_lesion" id="detalle_lesion" cols="20" rows="5">{{ old('detalle_lesion') }}</textarea>
              </div>
              <div class="form-group">
                <label for="alergia">¿Cuál es tu alergia?</label>
                <textarea class="form-control" placeholder="Alergia" name="alergia" id="alergia" cols="20" rows="5">{{ old('alergia') }}</textarea>
              </div>
              <div class="form-group">
                <label for="lesion">¿Cuentas con servicio de Medico?</label>
                <select name="servicio_medico" id="servicio_medico" class="form-select" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si" {{ old('servicio_medico') == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ old('servicio_medico') == 'No' ? 'selected' : '' }}>No</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre del Servicio de Medico" name="nombre_servicio_medico" id="nombre_servicio_medico" value="{{ old('nombre_servicio_medico') }}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="NSS" name="nss" id="nss" value="{{ old('nss') }}">
              </div> --}}
              <div class="form-group">
                <label for="religion">Nuestra Institución fomenta el Patriotismo, por lo que, para las actividades que se realizan es indispensable el
                    respeto y valor a los Símbolos Patrios, existiendo religiones que prohíben estas prácticas, ¿Cual es tu religión?</label>
                <input type="text" class="form-control" placeholder="Religion" name="religion" id="religion" value="{{ old('religion') }}" required>
              </div>
              <div class="form-group">
                <label for="nombre_padre">Nombre Completo de tu padre (Nombre, Apellido Paterno, Apellido Materno)</label>
                <input type="text" class="form-control" placeholder="Nombre del Padre" name="nombre_padre" id="nombre_padre" value="{{ old('nombre_padre') }}" required>
              </div>
              <div class="form-group">
                <label for="telefono_padre">Telefono de tu padre</label>
                <input type="text" class="form-control" placeholder="Telefono del Padre" name="telefono_padre" id="telefono_padre" value="{{ old('telefono_padre') }}" required>
              </div>
              {{-- <div class="form-group">
                <label for="ocupacion_padre">Ocupación de tu padre</label>
                <input type="text" class="form-control" placeholder="Ocupacion del Padre" name="ocupacion_padre" id="ocupacion_padre" value="{{ old('ocupacion_padre') }}" required>
              </div> --}}

              <div class="form-group">
                <label for="nombre_madre">Nombre Completo de tu madre (Nombre, Apellido Paterno, Apellido Materno)</label>
                <input type="text" class="form-control" placeholder="Nombre de la Madre" name="nombre_madre" id="nombre_madre" value="{{ old('nombre_madre') }}" required>
              </div>
              <div class="form-group">
                <label for="telefono_madre">Telefono de tu madre</label>
                <input type="text" class="form-control" placeholder="Telefono de la Madre" name="telefono_madre" id="telefono_madre" value="{{ old('telefono_madre') }}" required>
              </div>
              {{-- <div class="form-group">
                <label for="ocupacion_madre">Ocupación de tu madre</label>
                <input type="text" class="form-control" placeholder="Ocupacion de la Madre" name="ocupacion_madre" id="ocupacion_madre" value="{{ old('ocupacion_madre') }}" required>
              </div> --}}

              <div class="form-group">
                <label for="concentimiento" class="text-center">Estoy consciente que los entrenamientos pueden provocar, golpes, caídas y lesiones, por lo tanto, libero a la
                    Institución, a los instructores y a todo su personal, de toda responsabilidad de cualquier accidente que se pueda
                    sufrir durante y con motivo de los entrenamientos y prácticas.</label>
                <select name="concentimiento" id="concentimiento" class="form-select" required>
                    <option value="">Seleccione una opción</option>
                    <option value="Si" {{ old('concentimiento') == 'Si' ? 'selected' : '' }}>Si</option>
                    <option value="No" {{ old('concentimiento') == 'No' ? 'selected' : '' }}>No</option>
                </select>
              </div>

              <div class="form-group">
                <label for="contacto_emergencia">Contacto de Emergencia (Nombre, Parentesco, Teléfono)</label>
                <input type="text" class="form-control" placeholder="Contacto de Emergencia" name="contacto_emergencia" id="contacto_emergencia" value="{{ old('contacto_emergencia') }}" required>
              </div>

              <h3 class="text-center">ME COMPROMETO A TRABAJAR DE MANERA HONRADA, ORDENADA Y DISCIPLINADA,
                GUARDANDO SIEMPRE RESPETO A MIS INSTRUCTORES Y COMPAÑEROS, TODO PARA EL
                ENGRANDECIMIENTO DE MÉXICO</h3>

              <div class="form-group">
                <label for="password">Define una contraseña</label>
                <input type="password" class="form-control" placeholder="Password" name="password_solicitud" id="password_solicitud" required>
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="Enviar Solicitud">
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">

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
          </div>
        </div>
      </div>
    </div>


    <footer class="footer-section d-none">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script src="frontTheme/js/main.js"></script>

  <script>
    function llenarFormularioAutomaticamente() {
        // Datos de ejemplo
        const datosEjemplo = {
            unidad: "Biblioparque",
            nombre: "Juan",
            apellido_paterno: "Pérez",
            apellido_materno: "García",
            edad: "25",
            fecha_nacimiento: "1998-05-15",
            celular: "8441234567",
            escuela: "Escuela Ejemplo",
            grado: "3",
            grupo: "A",
            promedio: "8.5",
            materia_favorita: "Matemáticas",
            deporte_favorito: "Fútbol",
            facebook: "juan.perez",
            instagram: "juan_perez",
            tiktok: "@juanperez",
            lesion: "No",
            alergia: "Ninguna",
            servicio_medico: "Si",
            nombre_servicio_medico: "IMSS",
            nss: "12345678901",
            religion: "Católica",
            nombre_padre: "Pedro Pérez",
            telefono_padre: "8449876543",
            ocupacion_padre: "Ingeniero",
            nombre_madre: "María García",
            telefono_madre: "8445678901",
            ocupacion_madre: "Doctora",
            concentimiento: "Si",
            contacto_emergencia: "Ana Pérez, Hermana, 8442345678"
        };

        // Llenar los campos del formulario
        for (const [key, value] of Object.entries(datosEjemplo)) {
            const campo = document.getElementById(key);
            if (campo) {
                if (campo.type === "date") {
                    campo.value = value;
                } else if (campo.tagName === "SELECT") {
                    const opcion = Array.from(campo.options).find(option => option.value === value);
                    if (opcion) opcion.selected = true;
                } else {
                    campo.value = value;
                }
            }
        }
    }

    // Agregar un botón al formulario para activar la función
    const botonLlenar = document.createElement("button");
    botonLlenar.type = "button";
    botonLlenar.textContent = "Llenar formulario automáticamente";
    botonLlenar.onclick = llenarFormularioAutomaticamente;
    botonLlenar.classList.add("btn", "btn-secondary", "mb-3");

    // Insertar el botón al principio del formulario
    const formulario = document.querySelector("form");
   // formulario.insertBefore(botonLlenar, formulario.firstChild);
  </script>

<script>
        toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": "4000",
        "positionClass": "toast-top-right"
    };
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>


</body>

</html>
