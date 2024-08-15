<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registro_planta;

class PlantaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('planta.busqueda');
    }

    public function buscar(Request $request)
    {

        $query = registro_planta::query();

        // Verifica fechas
        $fechaInicio = $request->input('fechaInicio');
        $fechaFin = $request->input('fechaFin');
        //dd($fechaInicio ." ".$fechaFin);
        if ($fechaInicio && $fechaFin) {
            $query->whereBetween('date', [$fechaInicio, $fechaFin]);
        } else {
            // Retornar error si las fechas no existen
            return redirect()->back()->withErrors(['Por favor, seleccione un rango de fechas válido.']);
        }

        // Filtros por tipo de búsqueda linea
        $tipoBusqueda = $request->input('tipoBusqueda');
        //dd($request->input('numero'));
        //dd($tipoBusqueda);
        if ($tipoBusqueda === 'linea' && $request->input('incluirNumero')) {
            $numero = $request->input('numero');
            if ($numero) {
                $query->where('dial', 'like', $numero);
            }
        } elseif ($tipoBusqueda === 'extension') {
            $extension = $request->input('numero');
            if ($extension) {
                $query->where('ext', $extension);

                // Filtro por tipo de llamada para extension
                $tipoLlamada = $request->input('tipoLlamada');
                if ($tipoLlamada === 'entrante') {
                    $query->where('acc', 'like', 'INCOMING%');
                } elseif ($tipoLlamada === 'saliente') {
                    $query->where('acc', 'like', 'OUTGOING%');
                }
            } else {
                // Retornar error si el número de extensión no existe
                return redirect()->back()->withErrors(['Por favor, ingrese el número de la extensión.']);
            }
        } elseif ($tipoBusqueda === 'troncal') {
            $troncal = $request->input('troncal');
            if ($troncal) {
                //dd($troncal);
                $query->where('co', $troncal);

                // Filtro por tipo de llamada para troncal
                $tipoLlamada = $request->input('tipoLlamada');
                if ($tipoLlamada !== 'todas') {
                    if ($tipoLlamada === 'entrante') {
                        $query->where('acc', 'like', 'INCOMING%');
                    } elseif ($tipoLlamada === 'saliente') {
                        $query->where('acc', 'like', 'OUTGOING%');
                    }
                }
            } else {
                // Retornar error si la troncal no está presente
                return redirect()->back()->withErrors(['Por favor, seleccione una troncal válida.']);
            }
        }

        // Obtener resultados
        $resultados = $query->get();

        // Retornar resultados a la vista
        return view('planta.busqueda', compact('resultados'));
    }
}
