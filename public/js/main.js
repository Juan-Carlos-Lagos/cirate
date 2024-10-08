// Código para funcionamiento del modal Usuarios al momento de presionar en el botón Editar

const openModal = document.querySelectorAll('.open-modal');
const modal = document.querySelector('.modal-box');
const closeModal = document.querySelector('.modal-close');

openModal.forEach(button => {
    button.addEventListener('click', function(){
        modal.classList.add('modal--show')

        const userId = this.getAttribute('data-id');

        const name = this.getAttribute('data-name');
        const lastName = this.getAttribute('data-last-name');
        const email = this.getAttribute('data-email');
        const rol = this.getAttribute('data-rol');

        document.getElementById('user_id').value = userId;

        document.getElementById('nombre-edit').value = name;
        document.getElementById('apellido-edit').value = lastName;
        document.getElementById('email-edit').value = email;
        document.getElementById('rol-edit').value = rol;
        
    });
});

closeModal.addEventListener('click', function(){
    modal.classList.remove('modal--show')

    document.getElementById('nombre-edit').value = '';
    document.getElementById('apellido-edit').value = '';
    document.getElementById('email-edit').value = '';
    document.getElementById('rol-edit').value = '';
    document.getElementById('user_id').value = '';
});

// Código para interacción Usuarios, al momento de abrir la lista desplegable y seleccionar un
// Item, lo imprima en el input

const lista = document.querySelectorAll('.dropdown-item');

lista.forEach(item => {
    item.addEventListener('click', function(){
        const rolValue = this.getAttribute('data-value');
        // Tomar el valor del atributo data-value y se coloca en el input de texto
        document.getElementById('rol-edit').value = rolValue;
        document.getElementById('rol-edit2').value = rolValue;
    });
});

document.getElementById('submitEdit').addEventListener('click', function() {
    const form = document.getElementById('editUserForm');
    const userId = document.getElementById('user_id').value;
    
    // Cambia la acción del formulario para que apunte a la ruta de actualización
    form.action = updateUserRoute.replace(':user', userId); // Cambia esto según tu ruta

    // Enviar el formulario
    form.submit();
});