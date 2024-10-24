@extends('layouts.plantilla')

@section('title','Buscar y Actualizar')

@section('structure')

@if (session('success'))
<div class="alert alert-success" id="success-message">
    {{ session('success') }}
</div>
@endif

<div class="container py-5">
    <div class="mb-4">
        <h1 class="h2 font-weight-bold">Búsqueda Directorio</h1>
    </div>
    <div class="mb-4">
        <h2 class="h5 mb-3">Parámetros de búsqueda</h2>
        <form action="{{route('directorio.buscar')}}" method="GET">
            <div class="row g-3 align-items-center">
                <div class="col-md-8">
                    <input type="text" class="form-control" name="numero" placeholder="Buscar por número" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Buscar</button>
                </div>
                <div class="col-md-2">
                    {{-- <button class="btn btn-secondary w-100">Actualizar</button> --}}
                </div>
            </div>
        </form>
    </div>
    <!-- Tabla para mostrar teléfonos existentes -->
    <div class="card">
        <div class="card-body">
        <h2 class="h5 mb-4">Resultados de búsqueda</h2>
          <div class="table-responsive">
            <table class="table caption-bottom text-sm">
                    <thead>
                        <tr>
                        <th>Número</th>
                        <th>Propietario</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Comentarios</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($telefonos) <= 0)
                                <tr>
                                    <td colspan="6" class="text-center">No hay datos por mostrar</td>
                                </tr>
                            @else
                                @foreach ($telefonos as $telefono)
                                    <tr>
                                        <td>{{$telefono->telefono}}</td>
                                        <td>{{$telefono->nombre}}</td>
                                        <td>{{$telefono->direccion}}</td>
                                        <td>{{$telefono->ciudad}}</td>
                                        <td>{{$telefono->comentario}}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-secondary telefono-modal"
                                                data-idtelefono="{{$telefono->id_directorio}}"
                                                data-telefono="{{$telefono->telefono}}"
                                                data-nombre="{{$telefono->nombre}}"
                                                data-direccion="{{$telefono->direccion}}"
                                                data-ciudad="{{$telefono->ciudad}}"
                                                data-comentario="{{$telefono->comentario}}">Editar</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif  
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('layouts._partials.modalDirectorioBuscar')

<script src="{{ asset('js/directoriobuscar.js') }}"></script>
<script src="{{ asset('js/alerts.js')}}"></script>

@endsection