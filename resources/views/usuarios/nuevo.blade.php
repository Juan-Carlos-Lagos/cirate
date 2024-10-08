@extends('layouts.plantilla')

@section('title','Usuarios')

@section('structure')

<div class="container mt-5">
  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title">Crear Usuario</h2>
      <form method="POST" action="{{route('usuarios.agregar')}}" class="row g-3">
        @csrf
        <div class="col-md-6">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombres">
        </div>
        <div class="col-md-6">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Apellidos">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required placeholder="Ejemplo@ejemplo.com">
        </div>
        <div class="col-md-6">
          <label for="rol" class="form-label">Rol</label>
          <input type="text" class="form-control" id="rol" name="rol" required placeholder="Administrador/Empleado/Portero">
        </div>
        <div class="col-md-6">
          <label for="contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" name="contraseña" required placeholder="Contraseña">
        </div>
        <div class="col-md-6">
          <label for="confirmarContraseña" class="form-label">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="confirmarContraseña" name="confirmarcontraseña" required placeholder="Confirmar contraseña">
        </div>
        <div class="col-12 d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </div>
      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Usuarios</h2>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Rol</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $us)
            <tr>
              <td>{{$us->nombres}}</td>
              <td>{{$us->apellidos}}</td>
              <td>{{$us->email}}</td>
              <td>{{$us->rol}}</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-secondary open-modal"
                  data-id={{$us->id_usuario}}
                  data-name={{$us->nombres}}
                  data-last-name={{$us->apellidos}}
                  data-email={{$us->email}}
                  data-rol={{$us->rol}}>Editar</button>
                  <form action="{{route('nuevo.destroy', $us->id_usuario)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
            <!-- Más filas de usuarios pueden ir aquí -->
          </tbody>
        </table>
        {{ $user->links() }}
      </div>
    </div>
  </div>
</div>

@include('layouts._partials.modal')

<script src="{{ asset('js/main.js') }}"></script>

@endsection