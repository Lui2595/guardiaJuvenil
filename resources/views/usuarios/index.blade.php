@extends('layouts.admin')

@section('title')
    Lista de Usuarios
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
                                <th>Email</th>
                                <th>Celular</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->celular }}</td>
                                    <td>{{ $usuario->roll }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary modal-edit-rol" data-id="{{ $usuario->id }}" data-rol="{{ $usuario->roll }}">Editar
                                            Rol</a>
                                        <a href="#" class="btn btn-primary modal-edit-contrasena" data-id="{{ $usuario->id }}" >
                                        Actualizar Contraseña</a>
                                        {{-- <a href="{{ route('usuarios.destroy', $usuario->id) }}"
                                            class="btn btn-danger">Eliminar</a> --}}
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
            $(".modal-edit-rol").click(function(event) {
                event.preventDefault();
                $("#rolModal").find("form").attr("action", window.location.href + "/" + $(this).data("id"));
                $("#rolModal").modal("show");
                var rol = $(this).data("rol");
                $("#roll").val(rol);
            });
        });

        $(".modal-edit-contrasena").click(function(event) {
            event.preventDefault();
            $("#contrasenaModal").find("form").attr("action", window.location.href + "/" + $(this).data("id"));
            $("#contrasenaModal").modal("show");
        });

    </script>
@endpush
