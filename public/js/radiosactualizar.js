// Código para funcionamiento del modal Radios.actualizar al momento de presionar en el botón Editar

const radioModal = document.querySelectorAll('.radio-modal');
const modal = document.querySelector('.modal-box');
const closeModal = document.querySelector('.modal-close');

radioModal.forEach(button => {
    button.addEventListener('click', function(){
        modal.classList.add('modal--show')

        const radioId = this.getAttribute('data-idradio');

        const serial = this.getAttribute('data-serial');
        const alias = this.getAttribute('data-alias');

        document.getElementById('radio_id').value = radioId;

        document.getElementById('serial-edit').value = serial;
        document.getElementById('alias-edit').value = alias;

    });
});

closeModal.addEventListener('click', function(){
    modal.classList.remove('modal--show')

    document.getElementById('serial-edit').value = '';
    document.getElementById('alias-edit').value = '';
});

// Código para hacer recepcionar el envío del formulario y poder actualizar los radios
document.getElementById('submitRadio').addEventListener('click', function(){
    const formulario = document.getElementById('editaRadioForm');
    const radioId = document.getElementById('radio_id').value;

    // Cambia la acción del formulario para que apunte a la ruta de actualización
    formulario.action = updateRadioRoute.replace(':radios', radioId); // Cambia esto según tu ruta

    // Enviar el formulario
    formulario.submit();
});
