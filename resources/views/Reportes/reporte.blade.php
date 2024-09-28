@extends('layouts.plantilla')

@section('title', 'Reporte accion')

@section('structure')
<div class="card w-100 mb-4">
    <div class="card-body">
        <h3 class="card-title">Reporte de Actuación CUERPO DE BOMBEROS VOLUNTARIOS BUGA</h3>
    </div>
    <!-- inicio cart info llamada -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Información de llamada</h3>
            <p class="text-muted">Información sobre la emergencia.</p>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="codigoReporte">Codigo Reporte</label>
                    <select class="form-select" id="codigoReporte" name="codigoReporte">
                        <option value="" disabled selected>Seleccionar</option>
                        @foreach($codigos as $codigo)
                        <option value="{{ $codigo->id_codigo_r }}">{{ $codigo->codigo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="falsaAlarma">Falsa Alarma</label>
                    <div class="d-flex">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="opcionesFalsaAlarma" id="opcionSi" value="opcionSi">
                            <label class="form-check-label" for="opcionSi">
                                SI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opcionesFalsaAlarma" id="opcionNo" value="opcionNo">
                            <label class="form-check-label" for="opcionNo">
                                NO
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="diaSemana">Día de la semana</label>
                    <input type="text" class="form-control" id="diaSemana" name="diaSemana" placeholder="Dia semana" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="hora">Hora</label>
                    <input type="tex" class="form-control" id="hora" name="hora" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="medio">Medio</label>
                    <input type="text" class="form-control" id="medio" name="medio" placeholder="Medio reporte emergencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="alNo">Al No</label>
                    <input type="text" class="form-control" id="alNo" name="alNo" placeholder="Número llamada" disabled>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="persona">Persona</label>
                <input type="text" class="form-control" id="persona" name="persona" placeholder="Nombre de la persona que realizo la llamada" disabled>
            </div>
        </div>
    </div>
    <!-- prueba scrip -->


    <!-- fin prueba scripo -->

    <!-- fin cart informacion llamada -->


    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Reporte de Acción</h3>
            <p class="text-muted">Complete la información sobre el lugar abordado ante la situación reportada. </p>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="exit-time">Hora de salida</label>
                    <input type="time" class="form-control" id="exit-time">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="arrival-time">Hora de llegada</label>
                    <input type="time" class="form-control" id="arrival-time">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="entry-time">Hora de ingreso</label>
                    <input type="time" class="form-control" id="entry-time">
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="duration">Duración de la actuación</label>
                    <input type="text" class="form-control" id="duration" placeholder="Duración actuación">
                </div>
            </div>

            <div class="mb-3">
                <h4>Ubicación de la acción</h4>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle -- No --">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="barrio">Barrio o punto de referencia</label>
                    <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Barrio">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="usoLugar">Uso del lugar</label>
                    <input type="text" class="form-control" id="usoLugar" name="usoLugar" placeholder="Variante, Via pública, Vivienda ...">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="telefono">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número teléfono">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="tipoPropiedad">Tipo de Propiedad</label>
                    <select class="form-select" id="tipoPropiedad" name="tipoPropiedad">
                        <option value="">Seleccionar</option>
                        <option value="opcion1">Ninguno</option>
                        <option value="opcion2">Propietario</option>
                        <option value="opcion3">Inquilino</option>
                        <option value="opcion4">Administrador</option>
                        <option value="opcion5">Otro</option>
                    </select>
                    <input type="text" class="form-control mt-2" id="otroTipoPropiedad" name="otroTipoPropiedad" placeholder="Especificar" style="display: none;" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="companiaAseguradora">Compañía Aseguradora</label>
                    <select class="form-select" id="companiaAseguradora" name="companiaAseguradora">
                        <option value="">Seleccionar</option>
                        <option value="opcion2">Sí</option>
                        <option value="opcion3">No</option>
                    </select>
                    <input type="text" class="form-control mt-2" id="nombreCompaniaAseguradora" name="nombreCompaniaAseguradora" placeholder="Especificar" style="display: none;" disabled>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="comments">Detalles de Acción</label>
                <textarea class="form-control" id="comments" placeholder="La actuación consistió en..."></textarea>
            </div>
        </div>
    </div>

    <!-- aqui hay un scrip para tipo propietario y aseguradora -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tipoPropiedad = document.getElementById('tipoPropiedad');
            const otroTipoPropiedad = document.getElementById('otroTipoPropiedad');
            const companiaAseguradora = document.getElementById('companiaAseguradora');
            const nombreCompaniaAseguradora = document.getElementById('nombreCompaniaAseguradora');

            function toggleOtroTipoPropiedad() {
                if (tipoPropiedad.value !== '' && tipoPropiedad.value !== 'opcion1') {
                    otroTipoPropiedad.style.display = 'block';
                    otroTipoPropiedad.disabled = false;
                } else {
                    otroTipoPropiedad.style.display = 'none';
                    otroTipoPropiedad.disabled = true;
                }
            }

            function toggleNombreCompaniaAseguradora() {
                if (companiaAseguradora.value === 'opcion2') {
                    nombreCompaniaAseguradora.style.display = 'block';
                    nombreCompaniaAseguradora.disabled = false;
                } else {
                    nombreCompaniaAseguradora.style.display = 'none';
                    nombreCompaniaAseguradora.disabled = true;
                }
            }

            tipoPropiedad.addEventListener('change', toggleOtroTipoPropiedad);
            companiaAseguradora.addEventListener('change', toggleNombreCompaniaAseguradora);

            // Initial check
            toggleOtroTipoPropiedad();
            toggleNombreCompaniaAseguradora();
        });
    </script>
    <!-- fin cart reporte accion -->


    <!-- Informacion del procedimiento -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Procedimiento de Emergencia</h3>
            <p class="text-muted">Información sobre el procedimiento de emergencia realizado.</p>

            <div class="row mb-3">
                <h4 class="h5">Equipo Utilizado</h4>

                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="nombre-personal" class="form-label">Personal</label>
                        <input class="form-control " id="personal" placeholder="Cantidad" type="number" min="0" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="maquinas-personal" class="form-label">Máquinas</label>
                        <input class="form-control" id="maquinas-personal" placeholder="Máquinas" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="agua-personal" class="form-label">Agua</label>
                        <input class="form-control" id="agua-personal" placeholder="Galones" type="number" min="0" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Químicos</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="quimicos-personal-espuma" />
                            <label class="form-check-label" for="quimicos-personal-espuma">Espuma</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="quimicos-personal-extintores" />
                            <label class="form-check-label" for="quimicos-personal-extintores">Extintores</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="comentarios-personal" class="form-label">Materiales</label>
                        <textarea class="form-control" id="comentarios-personal" placeholder="Especifique la cantidad." rows="3"></textarea>
                    </div>

                    <!-- Otros -->

                    <h4 class="h5">Otros Oganismos que acudieron</h4>
                    <p class="text-muted">Especifique la cantidad para cada uno.</p>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2 flex-wrap">
                            <div class="d-flex align-items-center me-4">
                                <input class="form-check-input me-2" type="checkbox" id="otros-policia" />
                                <label class="form-check-label me-2" for="otros-policia">Policía</label>
                                <input class="form-control w-auto" id="otros-policia-cantidad" placeholder="Cantidad" type="number" min="0" />
                            </div>
                            <div class="d-flex align-items-center me-4">
                                <input class="form-check-input me-2" type="checkbox" id="otros-ejercito" />
                                <label class="form-check-label me-2" for="otros-ejercito">Ejército</label>
                                <input class="form-control w-auto" id="otros-ejercito-cantidad" placeholder="Cantidad" type="number" min="0" />
                            </div>
                            <div class="d-flex align-items-center me-4">
                                <input class="form-check-input me-2" type="checkbox" id="otros-defensa" />
                                <label class="form-check-label me-2" for="otros-defensa">Defensa Civil</label>
                                <input class="form-control w-auto" id="otros-defensa-cantidad" placeholder="Cantidad" type="number" min="0" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center me-4">
                                <input class="form-check-input me-2" type="checkbox" id="otros-cruz" />
                                <label class="form-check-label me-2" for="otros-cruz">Cruz Roja</label>
                                <input class="form-control w-auto" id="otros-cruz-cantidad" placeholder="Cantidad" type="number" min="0" />
                            </div>
                            <div class="d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox" id="otros-otros" />
                                <label class="form-check-label me-2" for="otros-otros">Otros</label>
                                <input class="form-control w-auto" id="otros-otros-cantidad" placeholder="Cantidad" type="number" min="0" />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Heridos muertos y rescatados -->

                <h4 class="h5">Registro de Víctimas en Emergencias</h4>
                <p class="text-muted">Por favor, ingrese la cantidad de heridos, muertos y rescatados en la emergencia.</p>
                <!-- Heridos -->
                <h4 class="h6">Heridos</h4>
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2 flex-wrap gap-2">
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-bomberos" />
                            <label class="form-check-label me-1" for="heridos-bomberos">Bomberos</label>
                            <input class="form-control custom-width" id="heridos-bomberos-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-hombres" />
                            <label class="form-check-label me-1" for="heridos-hombres">Hombres</label>
                            <input class="form-control custom-width" id="heridos-hombres-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-mujeres" />
                            <label class="form-check-label me-1" for="heridos-mujeres">Mujeres</label>
                            <input class="form-control custom-width" id="heridos-mujeres-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-ninos" />
                            <label class="form-check-label me-1" for="heridos-ninos">Niños</label>
                            <input class="form-control custom-width" id="heridos-ninos-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                    </div>

                </div>
                <!-- Muertos -->
                <h4 class="h6">Muertos</h4>
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2 flex-wrap gap-2">
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-bomberos" />
                            <label class="form-check-label me-1" for="heridos-bomberos">Bomberos</label>
                            <input class="form-control custom-width" id="heridos-bomberos-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-hombres" />
                            <label class="form-check-label me-1" for="heridos-hombres">Hombres</label>
                            <input class="form-control custom-width" id="heridos-hombres-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-mujeres" />
                            <label class="form-check-label me-1" for="heridos-mujeres">Mujeres</label>
                            <input class="form-control custom-width" id="heridos-mujeres-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-ninos" />
                            <label class="form-check-label me-1" for="heridos-ninos">Niños</label>
                            <input class="form-control custom-width" id="heridos-ninos-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                    </div>

                </div>
                <!-- Rescatados -->
                <h4 class="h6">Rescatados</h4>
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2 flex-wrap gap-2">
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-bomberos" />
                            <label class="form-check-label me-1" for="heridos-bomberos">Bomberos</label>
                            <input class="form-control custom-width" id="heridos-bomberos-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-hombres" />
                            <label class="form-check-label me-1" for="heridos-hombres">Hombres</label>
                            <input class="form-control custom-width" id="heridos-hombres-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center me-2">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-mujeres" />
                            <label class="form-check-label me-1" for="heridos-mujeres">Mujeres</label>
                            <input class="form-control custom-width" id="heridos-mujeres-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="form-check-input me-1" type="checkbox" id="heridos-ninos" />
                            <label class="form-check-label me-1" for="heridos-ninos">Niños</label>
                            <input class="form-control custom-width" id="heridos-ninos-cantidad" placeholder="Cantidad" type="number" min="0" />
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>
    <!-- fin cart informacion procedimiento -->


    <!-- Tipo alarma -->
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Tipo Alarma</h3>
            <p class="text-muted">Seleccione el tipo de alarma que se activó y proporcione una descripción detallada de la misma. </p>
        </div>
        <div class="card-body">
            <!-- Detalle de Incendio -->
            <div class="form-group mb-3">
                <label for="detalle-incendio" class="form-label">Detalle de incendio</label>
                <div class="d-flex align-items-center gap-2">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="detalle-incendio-a">
                        <label class="form-check-label" for="detalle-incendio-a">A</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="detalle-incendio-b">
                        <label class="form-check-label" for="detalle-incendio-b">B</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="detalle-incendio-c">
                        <label class="form-check-label" for="detalle-incendio-c">C</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="detalle-incendio-d">
                        <label class="form-check-label" for="detalle-incendio-d">D</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="detalle-incendio-k">
                        <label class="form-check-label" for="detalle-incendio-k">K</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="detalle-incendio-forestal">
                        <label class="form-check-label" for="detalle-incendio-forestal">Forestal</label>
                    </div>
                </div>
            </div>

            <!-- Informacion del Incendio -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="superficie-incendiada" class="form-label">Superficie incendiada</label>
                        <input type="text" class="form-control" id="superficie-incendiada" placeholder="Mtr2">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo-vegetacion" class="form-label">Tipo de vegetación</label>
                        <input type="text" class="form-control" id="tipo-vegetacion" placeholder="Descripcion">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="particularidades-riesgos" class="form-label">Particularidades o riesgos</label>
                        <input type="text" class="form-control" id="particularidades-riesgos" placeholder="Descripcion">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="posibles-causas-incendio" class="form-label">Posibles causas de incendio</label>
                        <input type="text" class="form-control" id="posibles-causas-incendio" placeholder="Descripcion">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="causas-propagacion" class="form-label">Posibles causas de propagación</label>
                        <input type="text" class="form-control" id="causas-propagacion" placeholder="Descripcion">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="medios-proteccion" class="form-label">Medios de protección propios del lugar incendiado</label>
                        <input type="text" class="form-control" id="medios-proteccion" placeholder="Descripcion">
                    </div>
                </div>
            </div>

            <!-- Vehículos Accidentados -->
            <div class="form-group mb-3">
                <h6>Vehículos accidentados</h6>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Placa</th>
                                <th>Conductor</th>
                                <th>CC No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Automóvil</td>
                                <td>Toyota</td>
                                <td>ABC123</td>
                                <td>Juan Pérez</td>
                                <td>123456789</td>
                            </tr>
                            <tr>
                                <td>Camión</td>
                                <td>Freightliner</td>
                                <td>XYZ456</td>
                                <td>María Gómez</td>
                                <td>987654321</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Víctimas o Personas Rescatadas -->
            <div class="form-group mb-3">
                <h6>Víctimas o personas rescatadas</h6>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de documento</th>
                                <th>Número</th>
                                <th>Tipo</th>
                                <th>Edad</th>
                                <th>Lesión</th>
                                <th>Enfermedad</th>
                                <th>Muerte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Pérez</td>
                                <td>Cédula</td>
                                <td>12345678</td>
                                <td>Hombre</td>
                                <td>35</td>
                                <td>Quemaduras de segundo grado</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>María Gómez</td>
                                <td>Pasaporte</td>
                                <td>ABC123456</td>
                                <td>Mujer</td>
                                <td>28</td>
                                <td>-</td>
                                <td>Intoxicación por humo</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Pedro Rodríguez</td>
                                <td>Cédula</td>
                                <td>98765432</td>
                                <td>Hombre</td>
                                <td>42</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Fallecido</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Observaciones -->

    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Observaciones</h3>
            <p class="text-muted mb-4">Proporcione detalles adicionales sobre el incidente, incluyendo observaciones generales, registro de personal y unidades que asistieron.</p>

            <div class="mb-4">
                <label for="observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="observaciones" placeholder="Agregar observaciones" rows="3"></textarea>
            </div>

            <div class="row mb-4">
                <h5>Otros</h5>
                <div class="col-md-6 mb-3">
                    <label for="registro-comandante" class="form-label">Comandante de maquinaria</label>
                    <input class="form-control" id="registro-comandante" type="text" placeholder="Nombre" />
                </div>
                <div class="col-md-6 mb-3">
                    <label for="registro-maquinista" class="form-label">Maquinista</label>
                    <input class="form-control" id="registro-maquinista" type="text" placeholder="Nombre" />
                </div>
                <div class="mb-4">
                    <label for="unidades-asistieron" class="form-label">Unidades que asistieron</label>
                    <textarea class="form-control" id="unidades-asistieron" placeholder="Unidades que asistieron en la emergencia." rows="3"></textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="guardia">Guardia</label>
                    <input class="form-control" id="guardia" type="text" placeholder="Nombre" disabled/>
                </div>

            </div>




        </div>
    </div>

    <!-- aqui ta el boton -->

    <div class="d-flex justify-content-center p-3">
        <button class="btn btn-primary" type="submit">
            Guardar
        </button>
    </div>



    <!-- fin primera cart -->
</div>

@endsection
@push('scripts')
<script>
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
</script>

@endpush