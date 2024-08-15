@extends('layouts.plantilla')

@section('title', 'Registro Planta')

@section('structure')

<div class="card shadow-sm max-w-md mx-auto my-4">
    <div class="card-body">
        <h3 class="card-title text-2xl font-semibold">Búsqueda de llamadas</h3>
        <form action="{{ route('planta.buscar') }}" method="POST">
            @csrf
            <div class="mt-4">
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipoBusqueda" id="busqueda-linea" value="linea" onclick="opciones()">
                        <label class="form-check-label" for="busqueda-linea">
                            Búsqueda por línea telefónica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipoBusqueda" id="busqueda-extension" value="extension" onclick="opciones()">
                        <label class="form-check-label" for="busqueda-extension">
                            Búsqueda por extensión
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipoBusqueda" id="busqueda-troncal" value="troncal" onclick="opciones()">
                        <label class="form-check-label" for="busqueda-troncal">
                            Búsqueda por troncal
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tipoLlamada" class="form-label">Tipo de llamada</label>
                    <select id="tipoLlamada" name="tipoLlamada" class="form-select">
                        <option value="todas">Todas</option>
                        <option value="entrante">Llamadas entrantes</option>
                        <option value="saliente">Llamadas salientes</option>
                    </select>
                </div>
                <div class="mb-3" id="grupoNumero">
                    <label for="numero" class="form-label" id="etiquetaNumero">Número telefónico</label>
                    <input type="tel" class="form-control" id="numero" name="numero" placeholder="Ingresa un número">
                </div>
                <div class="form-check mb-3" id="grupoIncluirNumero">
                    <input class="form-check-input" type="checkbox" id="incluirNumero" name="incluirNumero">
                    <label class="form-check-label" for="incluirNumero">
                        Incluir número telefónico
                    </label>
                </div>
                <div class="mb-3" id="grupoTroncal" style="display: none;">
                    <label for="troncal" class="form-label">Troncal</label>
                    <select id="troncal" name="troncal" class="form-select">
                            <option value="01">Troncal 1</option>
                            <option value="02">Troncal 2</option>
                            <option value="03">Troncal 3</option>
                            <option value="04">Troncal 4</option>
                            <option value="05">Troncal 5</option>
                            <option value="06">Troncal 6</option>
                            <option value="07">Troncal 7</option>
                            <option value="08">Troncal 8</option>
                            <option value="09">Troncal 9</option>
                            <option value="10">Troncal 10</option>
                            <option value="11">Troncal 11</option>
                            <option value="12">Troncal 12</option>
                            <option value="13">Troncal 13</option>
                            <option value="14">Troncal 14</option>
                            <option value="15">Troncal 15</option>
                            <option value="16">Troncal 16</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="fechaInicio" class="form-label">Fecha inicial</label>
                        <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
                    </div>
                    <div class="col">
                        <label for="fechaFin" class="form-label">Fecha final</label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>
</div>
<div class="table-responsive mt-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Ext</th>
                <th>Troncal</th>
                <th>Número</th>
                <th>Timbres</th>
                <th>Duración</th>
                <th>Acc</th>
                <th>Code</th>
                <th>CD</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se agregarán las filas de resultados dinámicamente -->
            @if(isset($resultados))
            @foreach($resultados as $resultado)
            <tr>
                <td>{{ $resultado->date }}</td>
                <td>{{ $resultado->time }}</td>
                <td>{{ $resultado->ext }}</td>
                <td>{{ $resultado->co }}</td>
                <td>{{ $resultado->dial }}</td>
                <td>{{ $resultado->ring }}</td>
                <td>{{ $resultado->duration }}</td>
                <td>{{ $resultado->acc }}</td>
                <td>{{ $resultado->code }}</td>
                <td>{{ $resultado->cd }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">No se encontraron resultados</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

<script>
    function opciones() {
        const tipoBusqueda = document.querySelector('input[name="tipoBusqueda"]:checked').value;
        const grupoNumero = document.getElementById('grupoNumero');
        const etiquetaNumero = document.getElementById('etiquetaNumero');
        const grupoIncluirNumero = document.getElementById('grupoIncluirNumero');
        const grupoTroncal = document.getElementById('grupoTroncal');

        if (tipoBusqueda === 'linea') {
            grupoNumero.style.display = 'block';
            grupoIncluirNumero.style.display = 'block';
            grupoTroncal.style.display = 'none';
            etiquetaNumero.textContent = 'Número telefónico';
        } else if (tipoBusqueda === 'extension') {
            grupoNumero.style.display = 'block';
            grupoIncluirNumero.style.display = 'none';
            grupoTroncal.style.display = 'none';
            etiquetaNumero.textContent = 'Extensión';
        } else if (tipoBusqueda === 'troncal') {
            grupoNumero.style.display = 'none';
            grupoIncluirNumero.style.display = 'none';
            grupoTroncal.style.display = 'block';
        }
    }
</script>
@endsection