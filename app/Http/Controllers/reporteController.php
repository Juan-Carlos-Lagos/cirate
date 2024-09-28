<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigo_reporte_accion;

class reporteController extends Controller
{

    public function reporte()
    {
        $codigos = codigo_reporte_accion::select('id_codigo_r', 'codigo')->get();

        return view('Reportes.reporte', ['codigos' => $codigos]);
    }

    //se requiere modificar las consultas para que carguen los datos automaticos
    public function show($id)
    {
        $codigoReporte = codigo_reporte_accion::find($id);

        if (!$codigoReporte) {
            return response()->json(['error' => 'Reporte no encontrado'], 404);
        }

        return response()->json($codigoReporte);
    }

    public function getCodigoReporteData($id)
    {
        $codigoReporte = codigo_reporte_accion::with('audios','directorio', 'usuario')->find($id);

        if ($codigoReporte) {
            return response()->json([
                'fecha' => $codigoReporte->fecha_creacion,
                'diasemana' => $codigoReporte->dia_semana,
                // la hora es de la llamada no de la creacion del codigo reporte
                'hora' => $codigoReporte->audios ? $codigoReporte->audios->hora_recepcion : null,

                // Traer el teléfono desde la relación 'directorio'
                'telefono_directorio' => $codigoReporte->directorio ? $codigoReporte->directorio->telefono : null,
                'nombre_directorio' => $codigoReporte->directorio ? $codigoReporte->directorio->nombre : null,

                // el nombre del usuario que creo el codigo de reporte
                'guardia' => $codigoReporte->usuario ? $codigoReporte->usuario->nombres : null,

            ]);
        } else {
            return response()->json(['error' => 'Código de reporte no encontrado.'], 404);
        }
    }
}
