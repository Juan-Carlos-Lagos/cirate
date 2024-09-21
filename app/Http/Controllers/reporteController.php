<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleTipo;

class reporteController extends Controller
{

    public function reporte()
    {
        $codigos = detalleTipo::where('fk_id_tipo', 1)->get();
        return view('Reportes.reporte', ['codigos' => $codigos]);
    }

//se requiere modificar las consultas para que carguen los datos automaticos
    public function show($id)
    {
        $codigoReporte = detalleTipo::find($id);

        if (!$codigoReporte) {
            return response()->json(['error' => 'Reporte no encontrado'], 404);
        }

        return response()->json($codigoReporte);
    }

    public function getCodigoReporteData($id)
    {
        $codigoReporte = detalleTipo::find($id);
        // dd($codigoReporte);

        if ($codigoReporte) {
            return response()->json([
                'fecha' => $codigoReporte->fecha,
                'diasemana' => $codigoReporte->diasemana,
                'hora' => $codigoReporte->hora,
                'fktelefonollamada' => $codigoReporte->fktelefonollamada,
                'fknombrellamada' => $codigoReporte->fknombrellamada,
            ]);
        } else {
            return response()->json(['error' => 'Código de reporte no encontrado.'], 404);
        }
    }
}
