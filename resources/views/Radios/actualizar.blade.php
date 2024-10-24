@extends('layouts.plantilla')

@section('title','Actualizar')

@section('structure')

<!-- Mostrar mensajes de éxito o error -->
@if (session('success'))
<div class="alert alert-success" id="success-message">
    {{ session('success') }}
</div>
@endif

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
        <form action="{{ route('radios.nuevo') }}" method="POST">
          @csrf
          <div class="grid gap-4">
            <div class="grid grid-cols-2 gap-4">
              <div class="space-y-2">
                <label class="form-label">Nuevo Serial de Radio</label>
                <input type="text" class="form-control" id="serial" name="serial" placeholder="Ingrese nuevo serial de radio" required>
              </div>
              <div class="space-y-2">
                <label class="form-label">Nuevo Alias de Radio</label>
                <input type="text" class="form-control" id="alias" name="alias" placeholder="Ingrese un nuevo alias de radio" required>
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
                <th>Serial de Radio</th>
                <th>Alias de Radio</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($radios as $radio)
              <tr>
                <td>{{ $radio->serial }}</td>
                <td>{{ $radio->alias }}</td>
                <td>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary radio-modal"
                    data-idradio="{{$radio->id_radio}}"
                    data-serial="{{$radio->serial}}"
                    data-alias="{{$radio->alias}}">Editar</button>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$radios->links()}}
        </div>
      </div>
    </div>
  </div>
</div>

@include('layouts._partials.modalRadiosActualizar')

<script src="{{ asset('js/radiosactualizar.js') }}"></script>
<script src="{{ asset('js/alerts.js') }}"></script>

@endsection