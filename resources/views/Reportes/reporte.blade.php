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
    <!-- fin cart informacion llamada -->
    <!-- pruebas boton para insert reporte action -->
    <form action="{{ route('reporte.guardar') }}" method="POST">
        @csrf
        <!-- aqui termina lo que añadi -->
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Reporte de Acción</h3>
                <p class="text-muted">Complete la información sobre el lugar abordado ante la situación reportada. </p>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label" for="exit-time">Hora de salida</label>
                        <input type="time" class="form-control" id="exit-time" name='hora_salida'>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="arrival-time">Hora de llegada</label>
                        <input type="time" class="form-control" id="arrival-time" name='hora_llegada'>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="entry-time">Hora de ingreso</label>
                        <input type="time" class="form-control" id="entry-time" name='hora_ingreso'>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="duracion">Duración de la actuación</label>
                        <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Duración actuación">
                    </div>
                </div>

                <div class="mb-3">
                    <h4>Ubicación de la acción</h4>
                </div>

                <div class="row mb-3">

                    <div class="col-md-6">
                        <label class="form-label" for="departamento">Departamento</label>
                        <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle -- No --">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="barrio">Barrio</label>
                        <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Barrio">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="usoLugar">Uso del lugar</label>
                        <select class="form-select" id="usoLugar" name="usoLugar">
                            <option value="" disabled selected>Seleccionar</option>
                            @foreach($detalles as $detalle)
                            <option value="{{ $detalle->id_detalle }}">{{ $detalle->nombre }}</option>
                            @endforeach
                            <option value="otroUsoLugar">Otro</option>
                        </select>
                        <div id="campoOtroUsoLugar" style="display:none;">
                            <input type="text" class="form-control mt-2" id="nuevoUsoLugar" name="nuevoUsoLugar" placeholder="Ingrese nuevo uso lugar" style="display: none;" disabled>

                            <!-- boton de prueba para los datos de uso lugar -->
                            <button type="submit" class="btn btn-primary mt-2">Agregar</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Número teléfono">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="tipoPropiedad">Tipo de Propiedad</label>
                        <select class="form-select" id="tipoPropiedad" name="tipoPropiedad">
                            <option value="" disabled selected>Seleccionar</option>
                            @foreach($propiedades as $propiedad)
                            <option value="{{ $propiedad->id_detalle }}">{{ $propiedad->nombre }}</option>
                            @endforeach
                            <option value="otroTipoPropiedad">Otro</option>
                        </select>

                        <input type="text" class="form-control mt-2" id="otroTipoPropiedad" name="otroTipoPropiedad" placeholder="Especificar" style="display: none;" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="companiaAseguradora">Compañía Aseguradora</label>
                        <select class="form-select" id="companiaAseguradora" name="companiaAseguradora">
                            <option value="" disabled selected>Seleccionar</option>
                            @foreach($aseguradoras as $aseguradora)
                            <option value="{{ $aseguradora->id_detalle }}">{{ $aseguradora->nombre }}</option>
                            @endforeach
                            <option value="otroTipoAseguradora">Otro</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="nombreCompaniaAseguradora" name="nombreCompaniaAseguradora" placeholder="Especificar" style="display: none;" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="dettaleAccion">Detalles de Acción</label>
                    <textarea class="form-control" id="dettaleAccion" name="dettaleAccion" placeholder="La actuación consistió en..."></textarea>
                </div>
            </div>
        </div>
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
                            <label for="personal" class="form-label">Personal</label>
                            <input class="form-control " id="personal" name="personal" placeholder="Cantidad" type="number" min="0" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="maquinas_utilizadas" class="form-label">Máquinas</label>
                            <input class="form-control" id="maquinas-utilizadas" name="maquinas_utilizadas" placeholder="Máquinas" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="agua_utilizada" class="form-label">Agua</label>
                            <input class="form-control" id="agua_utilizada" name="agua_utilizada" placeholder="Galones" type="number" min="0" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="quimicos" class="form-label">Químicos</label>
                            <select class="form-select" id="quimicos" name="quimicos">
                                <option value="" disabled selected>Seleccionar</option>
                                @foreach($quimicos as $quimico)
                                <option value="{{ $quimico->id_detalle }}">{{ $quimico->nombre }}</option>
                                @endforeach
                            </select>
                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="quimicos_espuma" />
                                <label class="form-check-label" for="quimicos_espuma">Espuma</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="quimicos_extintores" />
                                <label class="form-check-label" for="quimicos_extintores">Extintores</label>
                            </div>-->
                        </div>

                        <div class="mb-3">
                            <label for="materiales_cantidad" class="form-label">Materiales</label>
                            <textarea class="form-control" id="materiales_cantidad" name="materiales_cantidad" placeholder="Especifique la cantidad de los materiales utilizados." rows="3"></textarea>
                        </div>

                        <!-- Otros -->

                        <h4 class="h5">Otros Oganismos que acudieron</h4>
                        <p class="text-muted">Especifique la cantidad para cada uno.</p>
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2 flex-wrap">
                                <div class="d-flex align-items-center me-4">
                                    <input class="form-check-input me-2" type="checkbox" id="otros_policia" name="organismos[policia]"/>
                                    <label class="form-check-label me-2" for="policia">Policía</label>
                                    <input class="form-control w-auto" id="policia_cantidad" name="cantidad[policia]" placeholder="Cantidad" type="number" min="0" disabled />
                                </div>
                                <div class="d-flex align-items-center me-4">
                                    <input class="form-check-input me-2" type="checkbox" id="otros_ejercito" />
                                    <label class="form-check-label me-2" for="ejercito">Ejército</label>
                                    <input class="form-control w-auto" id="ejercito_cantidad" name="ejercito_cantidad" placeholder="Cantidad" type="number" min="0" disabled />
                                </div>
                                <div class="d-flex align-items-center me-4">
                                    <input class="form-check-input me-2" type="checkbox" id="otros-defensa" />
                                    <label class="form-check-label me-2" for="defensa">Defensa Civil</label>
                                    <input class="form-control w-auto" id="defensa_cantidad" name="defensa_cantidad" placeholder="Cantidad" type="number" min="0" disabled />
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center me-4">
                                    <input class="form-check-input me-2" type="checkbox" id="otros-cruz" />
                                    <label class="form-check-label me-2" for="cruz">Cruz Roja</label>
                                    <input class="form-control w-auto" id="cruz_cantidad" name="cruz_cantidad" placeholder="Cantidad" type="number" min="0" disabled />
                                </div>
                                <div class="d-flex align-items-center">
                                    <input class="form-check-input me-2" type="checkbox" id="otros-otros" />
                                    <label class="form-check-label me-2" for="otros">Otros</label>
                                    <input class="form-control w-auto" id="otros_cantidad" name="otros_cantidad" placeholder="Cantidad" type="number" min="0" disabled />
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
                        <input class="form-control" id="guardia" type="text" placeholder="Nombre" disabled />
                    </div>

                </div>

                <!-- aqui ta el boton -->

                <div class="d-flex justify-content-center p-3">
                    <button class="btn btn-primary" type="submit">
                        Guardar
                    </button>
                </div>


            </div>
        </div>

    </form>



    <!-- fin primera cart -->
</div>

@endsection

@push('scripts')

<!-- muestra el input del check selecionado -->
<script>
    document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const inputCantidad = this.parentElement.querySelector('.form-control');
            inputCantidad.disabled = !this.checked; // Habilita o deshabilita el input de cantidad
            if (!this.checked) {
                inputCantidad.value = ''; // Limpia el valor si se desmarca
            }
        });
    });
</script>


<!-- aqui hay un scrip para tipo propietario y aseguradora -->
<script>
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
</script>
<!-- fin scrip para tipo propiedad -->

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