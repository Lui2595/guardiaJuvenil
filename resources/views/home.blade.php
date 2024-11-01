@extends('layouts.frontApp')

@section('content')
<div class="latest-news">
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex team-vs">
                        <img src="{{ asset('storage/collage.jpg') }}" alt="Collage de imágenes" style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Últimos posts</h2>
            </div>
        </div>
        <div class="row no-gutters">
            {{-- Plantilla para imagen
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="#">
                        <img src="{{ asset('storage/<!--Imagen-->.jpg') }}" alt="Imagen" class="img-fluid">
                    </a>
                    <div class="caption">
                        <div class="caption-inner">
                            <h3><!--Título del post--></h3>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-4">
                <div class="post-entry">
                    <a href="https://www.facebook.com/photo/?fbid=921487190013455&set=a.548307767331401">
                        <img src="{{ asset('storage/el_mi.jpg') }}" alt="Imagen" class="img-fluid">
                    </a>
                    <div class="caption">
                        <div class="caption-inner">
                            <h3>¿Por qué usamos el mi?</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <a target="_blank" href="https://www.facebook.com/photo/?fbid=912815504213957&set=a.548307767331401">
                        <img src="{{ asset('storage/bomberos.jpg') }}" alt="Imagen" class="img-fluid">
                    </a>
                    <div class="caption">
                        <div class="caption-inner">
                            <h3>Día del bombero</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-entry">
                    <a target="_blank" href="https://www.facebook.com/photo/?fbid=904746045020903&set=a.548307767331401">
                        <img src="{{ asset('storage/ev_reforestacion.jpg') }}" alt="Imagen" class="img-fluid">
                    </a>
                    <div class="caption">
                        <div class="caption-inner">
                            <h3>Reforestamos Saltillo</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
