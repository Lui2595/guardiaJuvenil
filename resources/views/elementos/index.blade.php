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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Unidad</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($elementos as $elemento)
                                <tr>
                                    <td>{{ $elemento->id }}</td>
                                    <td>{{ $elemento->nombre . " " . $elemento->apellido_paterno . " " . $elemento->apellido_materno }}</td>
                                    <td>{{ $elemento->unidad }}</td>
                                    <td>{{ $elemento->edad }}</td>
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
            $('.table').DataTable();
        });
    </script>
@endpush
