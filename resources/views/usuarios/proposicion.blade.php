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
                                   if (!$usuario->elemento) { continue; }
                                @endphp
                                <tr>
                                    <td>{{ $usuario->elemento->nombre }}</td>
                                    <td>{{ $usuario->elemento->apellido_paterno }}</td>
                                    <td>{{ $usuario->elemento->apellido_materno }}</td>
                                    <td>{{ $usuario->elemento->prodecencia_abuelo_paterno }}</td>
                                    <td>{{ $usuario->elemento->prodecencia_abuela_paterna }}</td>
                                    <td>{{ $usuario->elemento->prodecencia_abuelo_materno }}</td>
                                    <td>{{ $usuario->elemento->prodecencia_abuela_materna }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary modal-edit-rol" data-id="{{ $usuario->id }}" >Aprobar</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rolModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Editar Rol
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol</label>
                            <select class="form-select" aria-label="Default select example" name="roll" id="roll">
                                <option selected>Selecciona rol</option>
                                <option value="superadmin">Superadmin</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>

                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contrasenaModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Actualizar Contraseña
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $("table").DataTable({
                "scrollX": true
            });

        });


    </script>
@endpush
