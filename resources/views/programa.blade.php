@extends('components.frontApp')

@section('content')

    <div class="site-section">
        <div class="container">

            {{-- Contenido de esta view --}}
        <main>
            <article id="introduccion" class="mb-5">
                <h2>Nuestro programa</h2>
                <p>Nuestro programa se integra por diversas academias, las cuales se abarcan en los distintos niveles de adiestramiento que recibe cada joven incorporado a nuestra asociación. Las mencionadas academias son las que a continuación se indican:</p>
                <ul>
                    <li>Academia deportiva</li>
                    <li>Academia marcial</li>
                    <li>Academia de formación ética</li>
                    <li>Academia de primeros auxilios</li>
                    <li>Academia de campismo/excursionismo</li>
                </ul>
            </article>
            <article id="a-deportiva" class="mb-5">
                <h2>Academia deportiva</h2>
                <p><b>Descripción: </b>Personas realizando ejercicios de peso corporal y entrenamientos en disciplinas deportivas especificas.</p>
                <p><b>Ambiente: </b>Un entorno dinámico y activo, con entrenadores supervisando la técnica de los estudiantes, acentuando la fuerza, flexibilidad y resistencia sin el uso de pesas tradicionales.</p>
                <p><b>Beneficios: </b></p>
                <ul>
                    <li>Mejora de la condición física en general: Al usar su propio peso corporal, el joven desarrolla fuerza, resistencia y flexibilidad, mejorando su salud física en general.</li>
                    <li>Trabajo en equipo y habilidades sociales: Participar en deportes colectivos fomenta el trabajo en equipo, la comunicación efectiva y el respeto por los compañeros y entrenadores.</li>
                    <li>Mayor control corporal y coordinación: La calistenia ayuda a dominar el movimiento propio del cuarpo , lo que mejora la consciencia corporal y la coordinació motora.</li>
                    <li>Aumento de la autoestima y la confianza: El logro progresivo de metas físicas y el control del cuerpo genera una mayor autoconfianza y percepción positiva de sí mismos.</li>
                    <li>Fomento de habilidades saludables: Incentiva el mantenimiento de una vida activa y el cuidaddo del propio cuerpo.</li>
                </ul>
                <h3>Actividades deportivas</h3>
                <ul>
                    <li>Acondicionamiento físico</li>
                    <li>Atletismo</li>
                    <li>Boxeo</li>
                    <li>Tiro deportio</li>
                    <li>Rappel</li>
                </ul>
            </article>
            <article id="a-marcial" class="mb-5">
                <h2>Academia marcial</h2>
                <p><b>Actividades: </b>Personas fomentando hábitos de disciplina, respeto y civismo.</p>
                <p><b>Ambiente:</b>Un entorno disciplinado y respetuoso, con maestros guiando a los estudiantes en la disciplina y respeto en general.</p>
                <p><b>Disciplina y autocontrol: </b>La disciplina marcial se basa en el orden y fomenta la capacidad del joven para regular sus emociones y comportamiento.</p>
                <p><b>Mejora de la confianza y la autoeficiencia: </b>Al dominar técnicas de defensa personal, los estudiantes ganan confianza en sí mismos y en sus habilidades para manejar situaciones difíciles.</p>
                <p><b>Fomento del respeto y la unidad: </b>El respeto hacia los maestros, compañeros y oponentes es una parte central de las artes marciales, lo que enseña valores de humildad y gratitud.</p>
                <p><b>Desarrollo de la concentración y el enfoque mental: </b>Las artes marciales requieren un enfoque mental preciso, lo que ayuda a mejorar la capacidad de concentración y la atención plena.</p>
                <h3>Disciplinas marciales</h3>
                <ul>
                    <li>Tae Kwon Do</li>
                    <li>Jiu Jitsu</li>
                    <li>Judo</li>
                    <li>Kung Fu</li>
                    <li>Defensa personal</li>
                    <li>Prevención de la victimización</li>
                </ul>
            </article>
            <article id="a-etica" class="mb-5">
                <h2>Academia de formación ética</h2>
                <p><b class="fw-bold">Actividades: </b>Charlas sobre valores, discusiones sobre dilemas éticos, análisis de casos reales, y trabajos en equipo para explorar temas como la justicia, el respeto y la responsabilidad.</p>
                <p><b>Ambiente: </b>Un espacio reflexivo y tranquilo donde los estudiantes intercambian ideas y aprenden sobre la toma de decisiones éticas en la vida diaria y profesional.</p>
                <p><b>Beneficios: </b></p>
                <ul>
                    <li>Desarrollo de valores y toma de decisiones: Aprender sobre ética y moral permite al joven reflexionar sobre sus decisiones y sus implicaciones en la vida cotidiana, ayudándolo a tomar decisiones más responsables.</li>
                    <li>Mejora en habilidades de pensamiento crítico: La discusión de dilemas morales fomenta la capacidad de analizar diferentes puntos de vista y soluciones posibles.</li>
                    <li>Fortalecimiento de la empatía y el respeto: Al participar en debates éticos, los estudiantes desarrollan una mayor comprensión de las perspectivas de los demás y aprenden a respetar las diferencias.</li>
                    <li>Preparación para desafíos futuros: Enfrentar cuestiones éticas desde una edad temprana les ayuda a estar mejor preparados para situaciones difíciles en su vida personal y profesional.</li>
                </ul>
                <h3>Temas relacionados</h3>
                <ul>
                    <li>Símbolos patrios</li>
                    <li>Prevención del delito</li>
                    <li>Cultura de la legalidad</li>
                    <li>Historia de México</li>
                    <li>Historia universal</li>
                    <li>Formación de liderazgo</li>
                    <li>Oratoria y debate</li>
                </ul>
            </article>
            <article id="a-auxilios"class="mb-5">
                <h2>Academia de primeros auxilios</h2>
                <p><b>Actividades: </b>Personas aprendiendo técnicas de primeros auxilios, prevención de riesgos y reacción ante siniestros.</p>
                <p><b>Ambiente: </b>Un entorno dinámico guiado por instructores expertos pertenecientes al cuerpo de bomberos y certificados por la Cruz Roja, en los temas afines.</p>
                <p><b>Beneficios: </b></p>
                <ul>
                    <li>Desarrollo de habilidades preventivas: El estudiante aprende a reconocer riesgos y formular planes que le permitan sobrevivir, evacuar y poner bajo resguardo a quienes le rodean en casos de incendios o cualquier otro siniestro.</li>
                    <li>Desarrollo de habilidades de toma de decisiones: Le permitirá tomar buenas decisiones en situaciones de riesgo, bajo presión.</li>
                    <li>Adquisición de habilidades y conocimientos básicos relacionados: El estudiante aprenderá técnicas de primeros auxilios, resguardo, evacuación y combate inicial de fuegos incipientes.</li>
                </ul>
                <h3>Temas relacionados</h3>
                <ul>
                    <li>Activación del sistema de emergencias</li>
                    <li>Venadjes</li>
                    <li>Tratamiento inicial de heridas</li>
                    <li>Tratamiento inicial de quemaduras</li>
                    <li>Traslados</li>
                    <li>Evacuación</li>
                    <li>Resguardo</li>
                    <li>Uso de extintores</li>
                </ul>
            </article>
            <article id="a-campismo" class="mb-5">
                <h2>Academia de campismo y excursionismo.</h2>
                <p><b>Actividades: </b>Personas aprendiendo técnicas básicas de supervivencia.</p>
                <p><b>Ambiente: </b>Un entorno dinámico en ambientes naturales, guiado por instructores expertos en el estudiante vive el contacto con la naturaleza, alejado de las tecnologías; en el que valora las comodidades cotidianas en un ambiente controlado, amistoso y ordenado.</p>
                <p><b>Beneficios: </b></p>
                <ul>
                    <li>Contacto con la naturaleza: El estudiante realiza actividades y adquiere conocimientos prácticos al aire libre, alejado de las tecnologías y comunicaciones.</li>
                    <li>Valoración de lo cotidiano: Al estar en un ambiente natural, lejos de casa, el estudiante reconoce y valora las comodidades con las que convive de  manera cotidiana.</li>
                    <li>Conciencia y responsabilidad ecológica: El estudiante adquiere conciencia del valor de nuestros recursos naturales, aprenderá a respetar, admirar y cuidar la vida silvestre.</li>
                </ul>
                <h3>Temas relacionados</h3>
                <ul>
                    <li>Senderismo <i>Hiking</i></li>
                    <li>Excursionismo</li>
                    <li>Campismo</li>
                    <li>Resolución de problemas tácticos</li>
                    <li>Técnicas de supervivencia</li>
                    <li>Orientación</li>
                </ul>
            </article>
            <article>
                <h2>Nuestro método de adiestramiento</h2>
                <p>El adiestramiento que ofrecemos se realiza de manera gradual. Nuestros estudiantes acceden a tres distintos niveles de adiestramiento  de acuerdo a su grado de avance.</p>
                <p>Así, cada vez que un estudiante logra concluir satisfactoriamente el nivel de adiestramiento en el que se encuentra, tiene acceso al programa siguiente.</p>
                <p>Además, cada elemento, de acuerdo a su nivel de adiestramiento, obtiene un grado en el escalafón jerárquico de un nuestra Institución.</p>
            </article>
        </main>
        {{-- Fin del contenido de la view --}}

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
            $("#encabezado").append("Programa de formación");
        });

    </script>
@endsection



        {{-- <footer>
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
        </footer> --}}
    </div>
