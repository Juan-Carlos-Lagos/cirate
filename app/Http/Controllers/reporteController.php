<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigo_reporte_accion;
use App\Models\reporte_actuacion;

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
        $codigoReporte = codigo_reporte_accion::with('audios', 'directorio', 'usuario')->find($id);

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
    // funcion de prueba para enviar los datos a la bd de reporte actuacion
    public function guardar(Request $request)
    {

        $request->validate([
            // validar datos
        ]);

        // Guardar los datos en la base de datos
        $reporte = new reporte_actuacion();
        $reporte->hora_salida = $request->hora_salida;
        $reporte->hora_llegada = $request->hora_llegada;
        $reporte->hora_ingreso = $request->hora_ingreso;
        $reporte->duracion_actuacion = $request->duracion;
        $reporte->departamento = $request->departamento;
        $reporte->municipio = $request->municipio;
        $reporte->ciudad = $request->ciudad;
        $reporte->direccion = $request->direccion;
        $reporte->barrio = $request->barrio;
       
        $reporte->save();

        // Redireccionar de vuelta a la vista con un mensaje de éxito
        return redirect()->back()->with('success', 'Reporte guardado exitosamente.');
    }
}
