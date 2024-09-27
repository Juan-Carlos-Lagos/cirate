@extends('layouts.plantilla')

@section('title','Buscar y Actualizar')

@section('structure')

<div class="container py-5">
    <div class="mb-4">
        <h1 class="h2 font-weight-bold">Búsqueda Directorio</h1>
    </div>
    <div class="mb-4">
        <h2 class="h5 mb-3">Parámetros de búsqueda</h2>
        <form action="{{route('directorio.buscar')}}" method="GET">
            <div class="row g-3 align-items-center">
                <div class="col-md-8">
                    <input type="text" class="form-control" name="numero" placeholder="Buscar por número">
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
    <div>
        <h2 class="h5 mb-4">Resultados de búsqueda</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Comentarios</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($telefonos)<=0)
                        <tr>
                            <td>No hay datos por mostrar</td>
                        </tr>       
                    @else
                    @foreach ($telefonos as $telefono)
                    <tr>
                        <td>{{$telefono->nombre}}</td>
                        <td>{{$telefono->telefono}}</td>
                        <td>{{$telefono->ciudad}}</td>
                        <td>{{$telefono->direccion}}</td>
                        <td>{{$telefono->comentario}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
@endsection