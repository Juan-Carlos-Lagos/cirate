const telefonoModal = document.querySelectorAll('.telefono-modal');
const modal = document.querySelector('.modal-box');
const closeModal = document.querySelector('.modal-close');

telefonoModal.forEach(button => {
    button.addEventListener('click', function(){
        modal.classList.add('modal--show')

        const telefonoId = this.getAttribute('data-idtelefono');
        
        const telefono = this.getAttribute('data-telefono');
        const nombre = this.getAttribute('data-nombre');
        const direccion = this.getAttribute('data-direccion');
        const ciudad = this.getAttribute('data-ciudad');
        const comentario = this.getAttribute('data-comentario');

        console.log('Muestra Id: ', telefonoId);

        document.getElementById('telefono_id').value = telefonoId;

        document.getElementById('numero-edit').value = telefono;
        document.getElementById('propietario-edit').value = nombre;
        document.getElementById('direccion-edit').value = direccion;
        document.getElementById('ciudad-edit').value = ciudad;
        document.getElementById('comentarios-edit').value = comentario;

    });
});

closeModal.addEventListener('click', function(){
    modal.classList.remove('modal--show')

        document.getElementById('numero-edit').value = '';
        document.getElementById('propietario-edit').value = '';
        document.getElementById('direccion-edit').value = '';
        document.getElementById('ciudad-edit').value = '';
        document.getElementById('comentarios-edit').value = '';
});

// Código para hacer recepcionar el envío del formulario y poder actualizar los teléfonos
document.getElementById('submitTelefono').addEventListener('click', function(){
    const formulario = document.getElementById('editTelefonoForm');
    const telefonoId = document.getElementById('telefono_id').value;

    // Cambia la acción del formulario para que apunte a la ruta de actualización
    formulario.action = updateTelefonoRoute.replace(':telefonos', telefonoId); // Cambia esto según tu ruta

    // Enviar el formulario
    formulario.submit();
});