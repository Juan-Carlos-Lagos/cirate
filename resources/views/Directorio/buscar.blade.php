@extends('layouts.plantilla')

@section('title','Buscar y Actualizar')

@section('structure')

<div class="container py-5">
    <div class="mb-4">
        <h1 class="h2 font-weight-bold">Búsqueda Directorio</h1>
    </div>
    <div class="mb-4">
        <h2 class="h5 mb-3">Parámetros de búsqueda</h2>
        <div class="row g-3 align-items-center">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Buscar por número">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Buscar</button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-secondary w-100">Actualizar</button>
            </div>
        </div>
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
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        

@endsection