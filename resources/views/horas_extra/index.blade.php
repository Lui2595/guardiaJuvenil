@extends('layouts.admin')
@section('title', 'Horas extra')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Add extra</h1>
    </div>
    <form action="{{ route('horas_extra.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="elemento_id">Elemento</label>
            <select name="elemento_id" id="elemento_id" class="form-control" required>
                <option value="">Seleccione un elemento</option>
                @foreach ($elementos as $elemento)
                    <option value="{{ $elemento->user_id }}">{{ $elemento->nombre }} {{ $elemento->apellido_paterno }} {{ $elemento->apellido_materno }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="horas">Horas</label>
            <input type="number" class="form-control" id="horas" name="horas" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </form>
</div>

<div class="card">
    <div class="card-body">
        <h1>Horas extra</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Elemento</th>
                    <th>Fecha</th>
                    <th>Horas</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($horas_extra as $horas_extra)
                    <tr>
                        <td>{{ $horas_extra->elemento->nombre }} {{ $horas_extra->elemento->apellido_paterno }} {{ $horas_extra->elemento->apellido_materno }}</td>
                        <td>{{ $horas_extra->created_at->format('d/m/Y') }}</td>
                        <td>{{ $horas_extra->horas }}</td>
                        <td>{{ $horas_extra->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
