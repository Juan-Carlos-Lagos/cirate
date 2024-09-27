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
        $codigoReporte = codigo_reporte_accion::find($id);
        // dd($codigoReporte);

        if ($codigoReporte) {
            return response()->json([
                'fecha' => $codigoReporte->fecha_creacion,
                'diasemana' => $codigoReporte->dia_semana,
                // la hora es de la llamada no de la creacion del codigo reporte
                'hora' => $codigoReporte->hora_creacion,

                'fktelefonollamada' => $codigoReporte->fktelefonollamada,
                'fknombrellamada' => $codigoReporte->fknombrellamada,
            ]);
        } else {
            return response()->json(['error' => 'Código de reporte no encontrado.'], 404);
        }
    }
}
