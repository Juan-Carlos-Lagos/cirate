<section class="modal-box">
    <div class="modal-container">
      <div class="container mt-2">
        <div class="card mb-4">
          <div id="modal-content" class="card-body">
            <h2 id="modal_title" class="card-title">Actualizar Radio</h2>
                <form id="editaRadioForm" method="POST" action="" class="row g-3">
                @method('PUT')
                @csrf
                <input type="hidden" name="radio_id" id="radio_id" value="">
                <div class="col-md-6">
                    <label for="serial" class="form-label">Serial de Radio</label>
                    <input type="text" class="form-control" id="serial-edit" name="serial" required>
                </div>
                <div class="col-md-6">
                    <label for="alias" class="form-label">Alias de Radio</label>
                    <input type="text" class="form-control" id="alias-edit" name="alias" required>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" id="submitRadio">Editar Radio</button>
                    <button type="button" id="button-modal" class="btn btn-primary modal-close">Cerrar</button>
                </div>
                </form>
            </div>
        </div>
        <script>
            const updateRadioRoute = "{{ route('radios.update', ':radios') }}"; // Placeholder para el ID del usuario
        </script>
    </div>
  </section>