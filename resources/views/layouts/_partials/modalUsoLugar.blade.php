{{-- resources/views/components/modal-otro-uso.blade.php --}}
<div class="modal fade" id="modalOtroUso" tabindex="-1" role="dialog" aria-labelledby="modalOtroUsoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalOtroUsoLabel">Agregar Nuevo Uso de Lugar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUsoLugar" action="{{ route('guardarUsoLugar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombreUso">Nombre</label>
                        <input type="text" id="nombreUso" name="nuevoUsoLugar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcionUso">Descripción</label>
                        <textarea id="descripcionUso" name="descripcionUso" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Uso de Lugar</button>
                </form>
            </div>
        </div>
    </div>
</div>
