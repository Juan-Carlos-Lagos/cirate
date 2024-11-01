// muestra el input del check selecionado 

    document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const inputCantidad = this.parentElement.querySelector('.form-control');
            inputCantidad.disabled = !this.checked; // Habilita o deshabilita el input de cantidad
            if (!this.checked) {
                inputCantidad.value = ''; // Limpia el valor si se desmarca
            }
        });
    });

// aqui hay un scrip para tipo propietario y aseguradora 

    document.addEventListener('DOMContentLoaded', function() {
        // Obtener los elementos del DOM
        const tipoPropiedad = document.getElementById('tipoPropiedad');
        const otroTipoPropiedad = document.getElementById('otroTipoPropiedad');
        const companiaAseguradora = document.getElementById('companiaAseguradora');
        const nombreCompaniaAseguradora = document.getElementById('nombreCompaniaAseguradora');
        const usoLugar = document.getElementById('usoLugar'); // Select para tipo de detalle
        const campoOtroUsoLugar = document.getElementById('campoOtroUsoLugar'); // Campo para "Otro" uso lugar
        const nuevoUsoLugar = document.getElementById('nuevoUsoLugar'); // Input para "Otro" uso lugar

        // Función para alternar la visibilidad de "Otro tipo de propiedad"
        function toggleOtroTipoPropiedad() {
            if (tipoPropiedad.value !== '' && tipoPropiedad.value !== 'opcion1') {
                otroTipoPropiedad.style.display = 'block';
                otroTipoPropiedad.disabled = false;
            } else {
                otroTipoPropiedad.style.display = 'none';
                otroTipoPropiedad.disabled = true;
            }
        }

        // Función para alternar la visibilidad del nombre de la compañía aseguradora
        function toggleNombreCompaniaAseguradora() {
            if (companiaAseguradora.value === 'opcion2') {
                nombreCompaniaAseguradora.style.display = 'block';
                nombreCompaniaAseguradora.disabled = false;
            } else {
                nombreCompaniaAseguradora.style.display = 'none';
                nombreCompaniaAseguradora.disabled = true;
            }
        }

        // Función para mostrar u ocultar el campo de "Otro" en el select de detalleTipo
        function toggleCampoOtroUsoLugar() {
            if (usoLugar.value === 'otro') {
                campoOtroUsoLugar.style.display = 'block'; // Mostrar el div
                nuevoUsoLugar.style.display = 'block'; // Mostrar el input
                nuevoUsoLugar.disabled = false; // Habilitar el input
            } else {
                campoOtroUsoLugar.style.display = 'none'; // Ocultar el div
                nuevoUsoLugar.style.display = 'none'; // Ocultar el input
                nuevoUsoLugar.disabled = true; // Deshabilitar el input
                nuevoUsoLugar.value = ''; // Limpiar el input
            }
        }

        // Event listeners para detectar cambios en los selects
        tipoPropiedad.addEventListener('change', toggleOtroTipoPropiedad);
        companiaAseguradora.addEventListener('change', toggleNombreCompaniaAseguradora);
        usoLugar.addEventListener('change', toggleCampoOtroUsoLugar);
        // Listener para "detalleTipo"

        // Comprobación inicial para que los campos tengan el estado correcto al cargar la página
        toggleOtroTipoPropiedad();
        toggleNombreCompaniaAseguradora();
        toggleCampoOtroUsoLugar(); // Comprobar el estado inicial para el campo de "Otro"
    });

// fin scrip para tipo propiedad 

    $(document).ready(function() {
        $('#codigoReporte').on('change', function() {
            var codigoId = $(this).val();
            if (codigoId) {
                $.ajax({
                    url: '/codigo-reporte/' + codigoId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.error) {
                            alert(data.error);
                        } else {
                            $('#fecha').val(data.fecha);
                            $('#diaSemana').val(data.diasemana);
                            $('#hora').val(data.hora);
                            $('#alNo').val(data.telefono_directorio);
                            $('#persona').val(data.nombre_directorio);
                            $('#guardia').val(data.guardia);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Error al obtener los datos del reporte.');
                    }
                });
            } else {
                $('#fecha').val('');
                $('#diaSemana').val('');
                $('#hora').val('');
                $('#alNo').val('');
                $('#persona').val('');
                $('#guardia').val('');
            }
        });
    });
