<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigoreporteaccion;

class reporteController extends Controller
{
    // public function reporte(){
    //     return view('Reportes.reporte');
    // }
    public function reporte()
    {

        $codigos = codigoreporteaccion::all();
        //dd( ($codigos));
        return view('Reportes.reporte', ['codigos' => $codigos]);
    }

    public function show($id)
    {
        $codigoReporte = codigoreporteaccion::find($id);

        if (!$codigoReporte) {
            return response()->json(['error' => 'Reporte no encontrado'], 404);
        }

        return response()->json($codigoReporte);
    }
    public function getCodigoReporteData($id)
    {
        $codigoReporte = codigoreporteaccion::find($id);
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
