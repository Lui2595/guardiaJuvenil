@extends('layouts.admin')

@section('title')
    Edición de elemento
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('elementos.update', $elemento->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <h1>Tus datos de usuario</h1>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$elemento->user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$elemento->user->email}}">
                        </div>
                        <p>Celular: {{$elemento->user->celular}}</p>
                        <p>Rol: {{$elemento->user->roll}}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h1>Tus Horas de Servicio</h1>
                        <p>Horas de asistencias: {{$elemento->user->horas_servicio->sum("horas")}}</p>
                        <p>
                            <a
                                class="btn btn-primary"
                                data-bs-toggle="collapse"
                                href="#horasServicio"
                                aria-expanded="false"
                                aria-controls="horasServicio"
                            >
                                Ver detalle
                            </a>
                        </p>
                        <div class="collapse" id="horasServicio">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Horas</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($elemento->user->horas_servicio as $horas_servicio)
                                        <tr>
                                            <td>{{ $horas_servicio->created_at->format('d/m/Y') }}</td>
                                            <td>{{ $horas_servicio->horas }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <p>Horas extra: {{$elemento->user->horas_extra->sum("horas")}}</p>
                        <p>
                            <a
                                class="btn btn-primary"
                                data-bs-toggle="collapse"
                                href="#contentId"
                                aria-expanded="false"
                                aria-controls="contentId"
                            >
                                Ver detalle
                            </a>
                        </p>
                        <div class="collapse" id="contentId">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Horas</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($elemento->user->horas_extra as $horas_servicio)
                                        <tr>
                                            <td>{{ $horas_servicio->created_at->format('d/m/Y') }}</td>
                                            <td>{{ $horas_servicio->horas }}</td>
                                            <td>{{ $horas_servicio->descripcion }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <p>Horas totales: {{$elemento->user->horas_servicio->sum("horas") + Auth::user()->horas_extra->sum("horas")}}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h1>Tus datos de elemento</h1>
                        @foreach($elemento->getAttributes() as $key => $value)
                            @php
                                if (in_array($key, ['aprobado','datos_completos'])) { continue; }
                            @endphp
                            @if(str_contains($key, 'procedencia'))
                                <div class="form-group">
                                    <label for="{{ $key }}">{{ str_replace('procedencia','Donde nacio tu ', str_replace('_', ' ', $key)) }}:</label>
                                    <input type="text" class="form-control" id="{{ $key }}" name="elemento[{{ $key }}]" value="{{ $value }}">
                                </div>
                                @php
                                    continue;
                                @endphp
                            @endif
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

                <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
            </form>
        </div>
    </div>
@endsection
