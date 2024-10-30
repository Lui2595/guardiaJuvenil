@extends('layouts.admin')

@section('title')
    Lista de Datos de Proposicion
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped overflow-auto">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Papa</th>
                                <th>Mama</th>
                                <th>Abuelo Paterno</th>
                                <th>Abuela Paterna</th>
                                <th>Abuelo Materno</th>
                                <th>Abuela Materna</th>
                                <th>Aprobar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proposicion as $usuario)
                                @php
                                    if (!$usuario->elemento) {
                                        continue;
                                    }

                                    if (
                                        $usuario->elemento->procedencia_abuelo_paterno == null ||
                                        $usuario->elemento->procedencia_abuela_paterna == null ||
                                        $usuario->elemento->procedencia_abuelo_materno == null ||
                                        $usuario->elemento->procedencia_abuela_materna == null
                                    ) {
                                        continue;
                                    }
                                @endphp
                                <tr>
                                    <td><a
                                            href="{{ route('elementos.show', $usuario->elemento->id) }}">{{ $usuario->elemento->nombre }}</a>
                                    </td>
                                    <td>{{ $usuario->elemento->apellido_paterno }}</td>
                                    <td>{{ $usuario->elemento->apellido_materno }}</td>
                                    <td>{{ $usuario->elemento->nombre_padre }}</td>
                                    <td>{{ $usuario->elemento->nombre_madre }}</td>
                                    <td>{{ $usuario->elemento->procedencia_abuelo_paterno }}</td>
                                    <td>{{ $usuario->elemento->procedencia_abuela_paterna }}</td>
                                    <td>{{ $usuario->elemento->procedencia_abuelo_materno }}</td>
                                    <td>{{ $usuario->elemento->procedencia_abuela_materna }}</td>
                                    <td>

                                        <div class="@if ($usuario->elemento->aprobado != null) d-none @else d-flex @endif gap-2"
                                            id="btns-{{ $usuario->id }}">
                                            <a href="#" class="btn btn-primary modal-edit-rol aprobar"
                                                data-id="{{ $usuario->id }}">Aprobar</a>
                                            <a href="#" class="btn btn-danger modal-edit-rol rechazar"
                                                data-id="{{ $usuario->id }}">Rechazar</a>
                                        </div>

                                        @if ($usuario->elemento->aprobado == '1')
                                            <span class="badge bg-success">Aprobado</span>
                                            <button class="btn btn-primary cambiar"
                                                data-id="{{ $usuario->id }}">Cambiar</button>
                                        @endif
                                        @if ($usuario->elemento->aprobado == '2')
                                            <span class="badge bg-danger">Rechazado</span>
                                            <button class="btn btn-primary cambiar"
                                                data-id="{{ $usuario->id }}">Cambiar</button>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("table").DataTable({
                "scrollX": true,
                "order": []
            });

        });
        $(".aprobar").click(function(e) {
            e.preventDefault();
            confirm("¿Estas seguro de aprobar esta proposicion?");
            if (confirm) {
                id_elemento = $(this).data("id");
                $.ajax({
                    type: "PUT",
                    url: "{{ route('elementos.evaluar', '') }}/" + $(this).data("id"),
                    data: {
                        _method: "PUT",
                        _token: "{{ csrf_token() }}",
                        aprobado: 1
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        console.log(id_elemento);
                        $("#btns-" + id_elemento).removeClass("d-flex");
                        $("#btns-" + id_elemento).addClass("d-none");
                        $("#btns-" + id_elemento).parent().prepend(
                            '<span class="badge bg-success">Aprobado</span><button class="btn btn-primary cambiar" data-id="' +
                                id_elemento + '" >Cambiar</button>');
                        $(".cambiar").click(function() {
                            $(this).siblings("span").remove();
                            $(this).remove();
                            $("#btns-" + $(this).data("id")).removeClass("d-none");
                            $("#btns-" + $(this).data("id")).addClass("d-flex");
                        });
                    }
                });
            }
        });
        $(".rechazar").click(function(e) {
            e.preventDefault();
            confirm("¿Estas seguro de rechazar esta proposicion?");
            id_elemento = $(this).data("id");
            if (confirm) {
                $.ajax({
                    type: "PUT",
                    url: "{{ route('elementos.evaluar', '') }}/" + $(this).data("id"),
                    data: {
                        _method: "PUT",
                        _token: "{{ csrf_token() }}",
                        aprobado: 2
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        console.log(id_elemento);
                        $("#btns-" + id_elemento).removeClass("d-flex");
                        $("#btns-" + id_elemento).addClass("d-none");
                        $("#btns-" + id_elemento).parent().prepend(
                            '<span class="badge bg-danger">Rechazado</span> <button class="btn btn-primary cambiar" data-id="' +
                            id_elemento + '" >Cambiar</button>');
                        $(".cambiar").click(function() {
                            console.log($(this).data("id"));
                            $(this).siblings("span").remove();
                            $(this).remove();
                            $("#btns-" + $(this).data("id")).removeClass("d-none");
                            $("#btns-" + $(this).data("id")).addClass("d-flex");
                        });
                    }
                });
            }
        });
        $(".cambiar").click(function() {
            console.log($(this).data("id"));
            $(this).siblings("span").remove();
            $(this).remove();
            $("#btns-" + $(this).data("id")).removeClass("d-none");
            $("#btns-" + $(this).data("id")).addClass("d-flex");
        });
    </script>
@endpush
