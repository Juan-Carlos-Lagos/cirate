<section class="modal-box">
    <div class="modal-container">
      <div class="container mt-2">
        <div class="card mb-4">
          <div id="modal-content" class="card-body">
            <h2 id="modal_title" class="card-title">Actualizar Teléfono</h2>
            <form id="editTelefonoForm" method="POST" action="" class="row g-3">
              @method('PUT')
              @csrf
              <input type="hidden" name="telefono_id" id="telefono_id" value="">
              <div class="col-md-6">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero-edit" name="numero" required>
              </div>
              <div class="col-md-6">
                <label for="propietario" class="form-label">Propietario</label>
                <input type="text" class="form-control" id="propietario-edit" name="propietario" required>
              </div>
              <div class="col-md-6">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion-edit" name="direccion" required>
              </div>
              <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad-edit" name="ciudad" required>
              </div>
              <div class="col-md-6">
                <label for="comentarios" class="form-label">Comentarios</label>
                <input type="text" class="form-control" id="comentarios-edit" name="comentarios">
              </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" id="submitTelefono">Editar teléfono</button>
                <button type="button" id="button-modal" class="btn btn-primary modal-close">Cerrar</button>
              </div>
            </form>
        </div>
        <script>
          const updateTelefonoRoute = "{{ route('telefono.update', ':telefonos') }}";
        </script>
    </div>
  </section>