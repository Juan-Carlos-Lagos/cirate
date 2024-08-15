@extends('layouts.plantilla')

@section('title','Home')

@section('structure')
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Recepción llamadas telefonicas
            </button>
        </h2>

        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            {{-- <div class="accordion-body d-flex justify-content-between flex-wrap"> --}}
            <div class="accordion-body">
                <div class="row">
                    <!-- inicio linea 1 -->
                    <div class="col-md-6">
                        <div class="card px-2">
                            <h4 class="car-center-sudo">Linea #1</h4>
                            <form action="{{ route('home.CodigoEmergencia') }}" method="POST">
                                @csrf
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="telefono" value="{{ $consulta->numero }}">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nombre" value="{{ $consulta->cliente }}">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $consulta->direccion }}">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $consulta->ciudad }}">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Reporte &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <select class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="codigo_reporte">
                                        <option value="" disabled selected>Seleccionar reporte</option>
                                        @foreach($codigos as $codigo)
                                        <option value="{{ $codigo->id }}">{{ $codigo->codigo }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Codigo Reporte &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="codigo_reporte" required>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword" value="{{ $consulta->comentario }}">
                                    <label for="floatingPassword">Comentario</label>
                                </div>

                                <div class="col-md-12 car-center-sudo">
                                    <button class="btn btn-success mb-3 col-md-5" type="submit">Agregar Comentario</button>
                                    <button class="btn btn-info mb-3 col-md-5" type="submit">Limpiar</button>
                                </div>
                                <div class="col-md-12 car-center-sudo">
                                    <button class="btn btn-warning mb-3 col-md-5" type="submit">Codigo Emergencia</button>
                                    <button class="btn btn-dark mb-3 col-md-5" type="submit">Guardar Directorio</button>
                                </div>
                            </form>
                        </div>
                        <br>
                    </div>
                    <!-- fin linea 1 -->

                    <div class="col-md-6 mb-3">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #2</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Comentario</label>
                            </div>

                            {{-- esto es una prueba pra los datos en la bd --}}
                            <div class="col-md-12 car-center-sudo">
                                <button class="btn btn-success mb-3 col-md-5" type="submit">Agregar
                                    Comentario</button>
                                <button class="btn btn-info mb-3 col-md-5" type="submit">Limpiar</button>
                            </div>
                            <div class="col-md-12 car-center-sudo">
                                <button class="btn btn-warning mb-3 col-md-5" type="submit">Guardar</button>
                                <button class="btn btn-dark mb-3 col-md-5" type="submit"> Guardar Directorio</button>
                            </div>
                            {{-- termina --}}
                        </div>
                        <br>
                    </div>


                    <div class="col-md-6 mb-3">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #3</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Comentario</label>
                            </div>
                            {{-- esto es una prueba pra los datos en la bd --}}
                            <div class="col-md-12 car-center-sudo">
                                <button class="btn btn-success mb-3 col-md-5" type="submit">Agregar
                                    Comentario</button>
                                <button class="btn btn-info mb-3 col-md-5" type="submit">Limpiar</button>
                            </div>
                            <div class="col-md-12 car-center-sudo">
                                <button class="btn btn-warning mb-3 col-md-5" type="submit">Guardar</button>
                                <button class="btn btn-dark mb-3 col-md-5" type="submit"> Guardar Directorio</button>
                            </div>
                            {{-- termina --}}
                            <br>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #4</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Comentario</label>
                            </div>
                            {{-- esto es una prueba pra los datos en la bd --}}
                            <div class="col-md-12 car-center-sudo">
                                <button class="btn btn-success mb-3 col-md-5" type="submit">Agregar
                                    Comentario</button>
                                <button class="btn btn-info mb-3 col-md-5" type="submit">Limpiar</button>
                            </div>
                            <div class="col-md-12 car-center-sudo">
                                <button class="btn btn-warning mb-3 col-md-5" type="submit">Guardar</button>
                                <button class="btn btn-dark mb-3 col-md-5" type="submit"> Guardar Directorio</button>
                            </div>
                            {{-- termina --}}
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item ">
        {{-- recepcion llamadas de radio --}}
        <h2 class="accordion-header ">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Recepción radio
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #1</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Id Radio</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Canal principal">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Alias &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Cerro Brisas">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Fecha &nbsp; &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Hora&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #2</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Id Radio</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Canal Secundario">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Alias &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Cerro Bellavista">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Fecha &nbsp; &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Hora&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #3</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Id Radio</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Canal Departamental">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Alias &nbsp; &nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Analogo">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Fecha &nbsp; &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Hora&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection