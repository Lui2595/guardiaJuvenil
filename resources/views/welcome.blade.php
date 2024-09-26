@extends('layouts.admin')

@section('title')
    Bienvenido {{Auth::user()->name}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('home.actualizar') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <h1>Tus datos de usuario</h1>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                        </div>
                        <p>Celular: {{Auth::user()->celular}}</p>
                        <p>Rol: {{Auth::user()->roll}}</p>
                    </div>
                </div>
                @if(Auth::user()->elemento)
                <div class="card">
                    <div class="card-body">
                        <h1>Tus datos de elemento</h1>
                        @foreach(Auth::user()->elemento->getAttributes() as $key => $value)
                            @if(!in_array($key, ['id', 'user_id', 'created_at', 'updated_at','fecha_nacimiento', 'unidad', 'edad']))
                                <div class="form-group">
                                    <label for="{{ $key }}">{{ ucfirst(str_replace('_', ' ', $key)) }}:</label>
                                    <input type="text" class="form-control" id="{{ $key }}" name="elemento[{{ $key }}]" value="{{ $value }}">
                                </div>
                            @endif
                            @if($key == 'fecha_nacimiento')
                                <div class="form-group">
                                    <label for="{{ $key }}">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" id="{{ $key }}" name="elemento[{{ $key }}]" value="{{ $value }}">
                                </div>
                            @endif
                            @if($key == 'unidad')
                                <div class="form-group">
                                    <label for="{{ $key }}">Unidad:</label>
                                    <select class="form-control" id="{{ $key }}" name="elemento[{{ $key }}]">
                                        <option value="Biblioparque" {{ $value == 'Bibloparque' ? 'selected' : '' }}>Bibloparque</option>
                                        <option value="Cecytec Sur" {{ $value == 'Cecytec Sur' ? 'selected' : '' }}>Cecytec Sur</option>
                                    </select>
                                </div>
                            @endif
                            @if($key == 'edad')
                                <div class="form-group">
                                    <label for="{{ $key }}">Edad:</label>
                                    <input type="number" class="form-control" id="{{ $key }}" name="elemento[{{ $key }}]" value="{{ $value }}" max="100" min="0">
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection
