@extends('layouts.frontApp')

@section('content')

    <div class="container site-section">
        <main>
            <section>
                <div class="row">
                    <div class="col-6 title-section">
                        <h2 class="heading">Últimos posts</h2>

                    </div>
                </div>
                <div class="row">
                    {{-- Plantilla de nuevo artículo
                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/<!--nombre del archivo-->.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text"><!--Pie de imagen--></figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta"><!--Fecha--></span>
                                    <h3 clas="mb-4"><a href="#"><!--Titulo--></a></h3>
                                    <p><!--Texto parcial de la nota-->.</p>
                                    <p><a href="<!--URL de la nota-->">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                     --}}

                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/el_mi.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text">Soldado recibiendo una insignia de un superior</figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta">4 de septiembre de 2024</span>
                                    <h3 clas="mb-4"><a href="#">¿Por qué usamos el mi?</a></h3>
                                    <p>Un poco de Cultura Militar, ¿por qué usamos nosotros el mi ..... para referirnos a un superior ?.</p>
                                    <p><a href="https://www.facebook.com/photo/?fbid=921487190013455&set=a.548307767331401" target="_blank">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/bomberos.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text">Felicitación a bomberos</figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta">22 de agosto de 2024</span>
                                    <h3 clas="mb-4"><a href="#">Día del bombero</a></h3>
                                    <p>Muchas felididades a todos los bomberos. Nuestro más profundo reconocimiento y agradecimiento por su heróica labor.</p>
                                    <p><a taget="_blank" href="https://www.facebook.com/photo/?fbid=912815504213957&set=a.548307767331401">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/ev_reforestacion.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text">Reforestación</figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta">10 de agosto de 2024</span>
                                    <h3 clas="mb-4"><a href="#">Reforestamos Saltillo</a></h3>
                                    <p>Muchas gracias a todos los que nos acompañaron a la actividad de reforestación. ¡Feclicidades por su esfuerzo!.</p>
                                    <p><a taget="_blank" href="https://www.facebook.com/photo/?fbid=904746045020903&set=a.548307767331401">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/magueyes.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text">¿Sabías qué?</figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta">8 de agosto de 2024</span>
                                    <h3 clas="mb-4"><a href="#">¿Saías qué?</a></h3>
                                    <p>¿Sabías que no siempre se tiene que reforestar con árboles?.</p>
                                    <p><a target="_blank" href="https://www.facebook.com/photo/?fbid=903406901821484&set=a.548307767331401">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/poster2.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text">Invitación</figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta">30 de julio de 20204</span>
                                    <h3 clas="mb-4"><a href="#">Ven a reforestar con nosotros</a></h3>
                                    <p>Amigos, son las recomendaciones para este sábado, únete!</p>
                                    <p><a href="<!--URL de la nota-->">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <article>
                            <div class="custom-media d-block">
                                <div class="img mb-4">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/poster.jpg') }}" alt="Imagen" class="img-fluid"></a>
                                        <figcaption class="text">Invitación</figcaption>
                                    </figure>
                                </div>
                                <div class="text">
                                    <span class="meta">30 de julio de 2024</span>
                                    <h3 clas="mb-4"><a href="#">Campaña de reforestación</a></h3>
                                    <p>Se hace un llamado a nuestros antiguos y nuevos elementos, acompáñanos este sábado 03 de agosto y planteamos árboles, dejemos un legado.</p>
                                    <p><a target="_blank" href="https://www.facebook.com/photo/?fbid=897354692426705&set=a.548307767331401">Leer más</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        <div class="container">
        </div>
    </div>p

@endsection

@section('scripts')

@endsection
