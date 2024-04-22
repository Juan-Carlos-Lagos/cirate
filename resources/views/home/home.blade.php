@extends('layouts.plantilla')

@section('structure')
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Recepción llamadas telefonicas
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                {{-- <div class="accordion-body d-flex justify-content-between flex-wrap"> --}}
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card px-2">
                                <h4 class="text-center">Linea #1</h4>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>


                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                        &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Comentario</label>
                                </div>
                                
                            </div>
                            {{-- esto es una prueba pra los datos en la bd --}}
                            <button type="submit">Enviar Registro</button>
                            <br>
                            {{-- termina --}}
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card px-2">
                                <h4 class="text-center">Linea #2</h4>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>


                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                        &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Comentario</label>
                                </div>
                                
                                 
                            </div>
                             {{-- esto es una prueba pra los datos en la bd --}}
                        <button type="submit">Cargar Registro</button>
                        <br>
                        {{-- termina --}}
                        </div>
                       

                        <div class="col-md-6 mb-3">
                            <div class="card px-2">
                                <h4 class="text-center">Linea #3</h4>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>


                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                        &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Comentario</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card px-2">
                                <h4 class="text-center">Linea #4</h4>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>


                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                        &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Comentario</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item ">
            <h2 class="accordion-header ">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Comentario</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="card px-2">
                            <h4 class="text-center">Linea #2</h4>
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Telefono &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>


                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nombre &nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Direccion&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad
                                    &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword">
                                <label for="floatingPassword">Comentario</label>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
            </div>
        </div>

    </div>
@endsection
