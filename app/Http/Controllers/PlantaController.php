<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\llamadasplanta;
use App\Models\audios;

class PlantaController extends Controller
{
    public function mostrarFormulario()
    {
        return view('planta.busqueda');
    }

    public function buscar(Request $request)
    {
        $query = llamadasplanta::query();

        // Verifica fechas
        $fechaInicio = $request->input('fechaInicio');
        $fechaFin = $request->input('fechaFin');
        
        if ($fechaInicio && $fechaFin) {
            // Unir la tabla audios para filtrar por fecha_recepcion
            $query->whereHas('audio', function($q) use ($fechaInicio, $fechaFin) {
                $q->whereBetween('fecha_recepcion', [$fechaInicio, $fechaFin]);
            });
        } else {
            // Retornar error si las fechas no existen
            return redirect()->back()->withErrors(['Por favor, seleccione un rango de fechas válido.']);
        }
    
        // Filtros por tipo de búsqueda
        $tipoBusqueda = $request->input('tipoBusqueda');
        
        // Filtro de búsqueda por línea
        if ($tipoBusqueda === 'linea' && $request->input('incluirNumero')) {
            $numero = $request->input('numero');
            if ($numero) {
                $query->where('dial', 'like', $numero);
                
                // Filtro por tipo de llamada para línea
                $tipoLlamada = $request->input('tipoLlamada');
                if ($tipoLlamada === 'entrante') {
                    $query->where('fk_id_detalletipo_tipo_llamada', 1);
                } elseif ($tipoLlamada === 'saliente') {
                    $query->where('fk_id_detalletipo_tipo_llamada', 2);
                } elseif ($tipoLlamada === 'todas') {
                    $query->where(function($q) {
                        $q->where('fk_id_detalletipo_tipo_llamada', 1)
                          ->orWhere('fk_id_detalletipo_tipo_llamada', 2);
                    });
                }
            }
        } 
        // Filtro de búsqueda por extensión
        elseif ($tipoBusqueda === 'extension') {
            $extension = $request->input('numero');
            if ($extension) {
                $query->where('ext', $extension);
                
                // Filtro por tipo de llamada para extensión
                $tipoLlamada = $request->input('tipoLlamada');
                if ($tipoLlamada === 'entrante') {
                    $query->where('fk_id_detalletipo_tipo_llamada', 1);
                } elseif ($tipoLlamada === 'saliente') {
                    $query->where('fk_id_detalletipo_tipo_llamada', 2);
                } elseif ($tipoLlamada === 'todas') {
                    $query->where(function($q) {
                        $q->where('fk_id_detalletipo_tipo_llamada', 1)
                          ->orWhere('fk_id_detalletipo_tipo_llamada', 2);
                    });
                }
            } else {
                // Retornar error si el número de extensión no existe
                return redirect()->back()->withErrors(['Por favor, ingrese el número de la extensión.']);
            }
        } 
        // Filtro de búsqueda por troncal
        elseif ($tipoBusqueda === 'troncal') {
            $troncal = $request->input('troncal');
            if ($troncal) {
                $query->where('co', $troncal);
                
                // Filtro por tipo de llamada para troncal
                $tipoLlamada = $request->input('tipoLlamada');
                if ($tipoLlamada === 'entrante') {
                    $query->where('fk_id_detalletipo_tipo_llamada', 1);
                } elseif ($tipoLlamada === 'saliente') {
                    $query->where('fk_id_detalletipo_tipo_llamada', 2);
                } elseif ($tipoLlamada === 'todas') {
                    $query->where(function($q) {
                        $q->where('fk_id_detalletipo_tipo_llamada', 1)
                          ->orWhere('fk_id_detalletipo_tipo_llamada', 2);
                    });
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
