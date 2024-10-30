// Estos son los selects
const usoLugar = document.getElementById('usoLugar');
const tipoPropiedad = document.getElementById('tipoPropiedad');
const aseguradora = document.getElementById('companiaAseguradora');

// Estos son los Id de cada modal
const usoLugarModal = document.getElementById('usoLugarModal');
const tipoPropiedadModal = document.getElementById('tipoPropiedadModal');
const companiaAseguradoraModal = document.getElementById('aseguradora');

usoLugar.addEventListener('change', function() {
    if (this.value === 'otroUsoLugar') {
        usoLugarModal.classList.add('modal--show');
    }
});

tipoPropiedad.addEventListener('change', function() {
    if (this.value === 'otroTipoPropiedad') {
        tipoPropiedadModal.classList.add('modal--show');
    }
});

aseguradora.addEventListener('change', function(){
    if (this.value === 'otroTipoAseguradora'){
        companiaAseguradoraModal.classList.add('modal--show');
    }
});

document.querySelectorAll('.modal-close').forEach(button => {
    button.addEventListener('click', function() {
        const modal = this.closest('.modal-box');
        modal.classList.remove('modal--show'); // Ocultar el modal

        // Restablecer selects
        usoLugar.selectedIndex = 0; 
        tipoPropiedad.selectedIndex = 0; 
        aseguradora.selectedIndex = 0;
    });
});