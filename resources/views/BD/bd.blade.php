@extends('layouts.plantilla')

@section('title','BD Backup')
@section('structure')


<div class="container mt-5 max-w-md mx-auto">
  <div class="card mb-4">
    <div class="card-body">
      <h3 class="card-title">Crear copia de base de datos</h3>
      <p class="card-text">
        Ingresa el nombre de la copia y selecciona la carpeta de destino.
      </p>
      <form action="{{ route('createBackup') }}" method="POST">
        @csrf
        <div class="row g-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Nombre de la copia</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa el nombre">
          </div>
          <div class="col-md-6">
            <label for="folder" class="form-label">Carpeta de destino</label>
            <input type="text" class="form-control" id="folder" name="folder" placeholder="Ingresa la carpeta de destino">
          </div>
        </div>
        <div class="text-end mt-3">
          <button class="btn btn-primary" type="submit">Guardar copia de seguridad</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Cargar copia de bd -->
<div class="card">
  <div class="card-body">
    <h3 class="card-title">Archivo de base de datos</h3>
    <form>
      <div class="mb-3">
        <label for="file" class="form-label">Archivo de base de datos</label>
        <input type="file" class="form-control" id="file">
      </div>
    </form>
  </div>
  <div class="card-footer text-end">
    <button class="btn btn-primary">Cargar copia</button>
  </div>
</div>
</div>

@endsection