document.addEventListener('DOMContentLoaded', function() {
    // Función para ocultar los mensajes después de 5 segundos
    setTimeout(() => {
        const successMessage = document.getElementById('success-message');
        // const errorMessage = document.getElementById('error-message');
        if (successMessage) successMessage.style.display = 'none';
        // if (errorMessage) errorMessage.style.display = 'none';
    }, 3000); // Cambia 5000 a la cantidad de milisegundos que desees
});