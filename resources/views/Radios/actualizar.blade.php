@extends('layouts.plantilla')

@section('title','Actualizar')

@section('structure')
<div class="card shadow-sm bg-card text-card-foreground w-full max-w-4xl">
  <div class="card-body">
    <h3 class="card-title text-2xl font-semibold leading-none tracking-tight">
      Actualización y Creación de Radios
    </h3>
  </div>
  <div class="card-body">
    <!-- Formulario para crear un nuevo radio -->
    <div class="card mb-4">
      <div class="card-body">
        <form action="{{ route('radios.nuevoRadio') }}" method="POST">
          @csrf
          <div class="grid gap-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label class="form-label">Nuevo Serial de Radio</label>
                <input type="text" class="form-control" id="serial" name="serial" placeholder="Ingrese nuevo serial de radio">
              </div>
              <div class="space-y-2">
                <label class="form-label">Nuevo Alias de Radio</label>
                <input type="text" class="form-control" id="alias" name="alias" placeholder="Ingrese un nuevo alias de radio">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
              Crear Nuevo Radio
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Tabla para mostrar radios existentes -->
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table caption-bottom text-sm">
            <thead>
              <tr>
                <th>ID de Radio</th>
                <th>Alias de Radio</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($radios as $radio)
              <tr>
                <td>{{ $radio->serial }}</td>
                <td>{{ $radio->alias }}</td>
                <td>
                  <!-- colocar botones para modificar o eliminar radios -->
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection