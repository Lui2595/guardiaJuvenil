@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Evaluar {{$prueba->nombre}} a {{$elemento->nombre}} {{$elemento->apellido_paterno}} {{$elemento->apellido_materno}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Datos de la prueba</h2>
                <form action="{{route('pruebas.store', [$prueba->id, $elemento->user_id])}}" method="post">
                    @csrf
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Evaluación</th>
                            <th>Descripción</th>
                            <th>Medida</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prueba->prueba_datos as $dato)
                            <tr>
                                <td>{{ $dato->nombre }}</td>
                                <td>
                                    <input type="text" class="form-control" name="resultado_{{ $dato->id }}" value="{{ $dato->resultado }}">
                                </td>
                                <td>{{ $dato->descripcion }}</td>
                                <td>{{ $dato->medida }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            </div>

    </div>
@endsection

@section('buttons')
    <a href="{{ route('elementos.index') }}" class="btn btn-secondary">Volver</a>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "scrollX": true
            });
        });
    </script>
@endpush
