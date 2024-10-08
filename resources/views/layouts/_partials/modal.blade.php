<section class="modal-box">
    <div class="modal-container">
      <div class="container mt-2">
        <div class="card mb-4">
          <div id="modal-content" class="card-body">
            <h2 id="modal_title" class="card-title">Actualizar Usuario</h2>
            <form id="editUserForm" method="POST" action="" class="row g-3">
              @method('PUT')
              @csrf
              <input type="hidden" name="user_id" id="user_id" value="">
              <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre-edit" name="nombre" required>
              </div>
              <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido-edit" name="apellido" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email-edit" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="rol" class="form-label">Rol</label>
                <div class="d-flex">
                  <input type="hidden" name="rol-edit2" id="rol-edit2">
                  <input type="text" class="form-control custom-width" id="rol-edit" readonly disabled required>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" data-value="Administrador">Administrador</a></li>
                      <li><a class="dropdown-item" data-value="Empleado">Empleado</a></li>
                      <li><a class="dropdown-item" data-value="Portero">Portero</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" id="submitEdit">Editar usuario</button>
                <button type="button" id="button-modal" class="btn btn-primary modal-close">Cerrar</button>
              </div>
            </form>
        </div>
        </div>
            <script>
                const updateUserRoute = "{{ route('nuevo.update', ':user') }}"; // Placeholder para el ID del usuario
            </script>
        </div>
  </section>