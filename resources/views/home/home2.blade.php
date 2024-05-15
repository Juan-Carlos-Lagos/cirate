@extends('layouts.plantilla')

@section('structure')
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Llamadas Telefonicas
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card px-2">
                                <h4 class="text-center">Linea #1</h4>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Numero de Telefono</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Nombre</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Direccion</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Ciudad</label>
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
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Numero de Telefono</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Nombre</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Direccion</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Ciudad</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Comentario</label>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="card px-2">
                                <h4 class="text-center">Linea #3</h4>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Numero de Telefono</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Nombre</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Direccion</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Ciudad</label>
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
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Numero de Telefono</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Nombre</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Direccion</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPassword">
                                    <label for="floatingPassword">Ciudad</label>
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
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Frecuencia de Radio
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                    filled with some actual content.
                </div>
            </div>
        </div>
    </div>
@endsection
