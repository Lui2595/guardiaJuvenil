@extends('layouts.admin')

@section('title', 'Elementos')

@section('styles')
    Aqui se listan todos los elementos
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Unidad</th>
                                    <th>Edad</th>
                                    @if (Auth::user()->roll == 'admin' || Auth::user()->roll == 'superadmin')
                                        <th>Pruebas</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($elementos as $elemento)
                                    <tr>
                                        <td>{{ $elemento->id }}</td>
                                        <td>{{ $elemento->nombre . ' ' . $elemento->apellido_paterno . ' ' . $elemento->apellido_materno }}
                                        </td>
                                        <td>{{ $elemento->unidad }}</td>
                                        <td>{{ $elemento->edad }}</td>
                                        @if (Auth::user()->roll == 'admin' || Auth::user()->roll == 'superadmin')
                                            <td>
                                                @foreach ($pruebas as $prueba)
                                                    <a href="{{ route('pruebas.evaluar', [$prueba->id, $elemento->user_id]) }}"
                                                        class="btn btn-primary">{{ $prueba->nombre }}</a>
                                                @endforeach
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
