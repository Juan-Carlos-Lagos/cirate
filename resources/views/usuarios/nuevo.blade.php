@extends('layouts.plantilla')

@section('title','Usuarios')

@section('structure')

<div class="container mt-5">
  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title">Crear Usuario</h2>
      <form class="row g-3">
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
          <input type="rol" class="form-control" id="rol" name="rol" required placeholder="Admin/Usu">
        </div>
        <div class="col-md-6">
          <label for="contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" name="contraseña" required placeholder="Contraseña">
        </div>
        <div class="col-md-6">
          <label for="confirmarContraseña" class="form-label">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="confirmarContraseña" name="confirmarContraseña" required placeholder="Confirmar contraseña">
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
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>Admin</td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-secondary">Editar</button>
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
              </td>
            </tr>
            <!-- Más filas de usuarios pueden ir aquí -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection