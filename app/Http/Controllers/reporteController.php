<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigo_reporte_accion;
use App\Models\reporte_actuacion;
use App\Models\detalleTipo;
use App\Models\cantidadOrganismoReporte;
use Carbon\Carbon;

class reporteController extends Controller
{

    public function reporte()
    {
        $codigos = codigo_reporte_accion::select('id_codigo_r', 'codigo')->get();

        $detallesTipos = detalleTipo::whereIn('fk_id_tipo', [4, 5, 6, 7])->get(['id_detalle', 'nombre', 'fk_id_tipo']);

        $detalles = $detallesTipos->where('fk_id_tipo', 4);
        $propiedades = $detallesTipos->where('fk_id_tipo', 5);
        $aseguradoras = $detallesTipos->where('fk_id_tipo', 6);
        $quimicos = $detallesTipos->where('fk_id_tipo', 7);

        return view('Reportes.reporte', [
            'codigos' => $codigos,
            'detalles' => $detalles,
            'propiedades' => $propiedades,
            'aseguradoras' => $aseguradoras,
            'quimicos' => $quimicos
        ]);
    }


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
        $reporte->fk_detalletipo_uso_lugar = $request->usoLugar;
        $reporte->telefono = $request->telefono;
        $reporte->fk_detalletipo_tipo_propiedad = $request->tipoPropiedad;
        $reporte->fk_detalletipo_tipo_aseguradora = $request->companiaAseguradora;
        $reporte->detalle_accion = $request->dettaleAccion;
        $reporte->personal_desplegado = $request->personal;
        $reporte->maquinas_utilizadas = $request->maquinas_utilizadas;
        $reporte->cantidad_agua = $request->agua_utilizada;
        $reporte->fk_detalletipo_tipo_quimico = $request->quimicos;
        $reporte->cantidad_materiales = $request->materiales_cantidad;




        $reporte->save();

        $idReporte = $reporte->id_reporte;
        $this->guardarOtrosOrganismos($request, $idReporte);

        return redirect()->back()->with('success', 'Reporte guardado exitosamente.');
    }


    // funcion para llenar los datos en la tabla cantidad_organismos_reporte
    public function guardarOtrosOrganismos(Request $request, $idReporte)
    {
        $organismosSeleccionados = $request->input('organismos');
        $cantidades = $request->input('cantidad');

        if (empty($organismosSeleccionados)) {
            // Si no se selecciona ningún organismo, solo guarda el fk_id_reporte
            cantidadOrganismoReporte::create([
                'fk_id_reporte' => $idReporte
            ]);
            return;
        }

        foreach ($organismosSeleccionados as $organismo => $value) {
            if (isset($cantidades[$organismo]) && $cantidades[$organismo] > 0) {
                $tipoEntidad = $this->obtenerTipoEntidad($organismo);

                // Inserta utilizando el modelo
                cantidadOrganismoReporte::create([
                    'fk_detalletipo_tipoentidad' => $tipoEntidad,
                    'cantidad' => $cantidades[$organismo],
                    'fk_id_reporte' => $idReporte
                ]);
            }
        }
    }

    public function obtenerTipoEntidad($organismo)
    {
        // Relación entre los nombres de los organismos y los nombres en la base de datos
        $nombresOrganismos = [
            'policia' => 'Policía',
            'ejercito' => 'Ejército',
            'defensa' => 'Defensa Civil',
            'cruz' => 'Cruz Roja',
            'otros' => 'Otros'
        ];

        // Obtener el nombre del organismo que corresponde al input
        $nombreOrganismo = $nombresOrganismos[$organismo] ?? null;

        if ($nombreOrganismo) {
            // Consultar el ID del detalleTipo donde el nombre coincida con el organismo
            $detalle = detalleTipo::where('nombre', $nombreOrganismo)->first();

            if ($detalle) {
                return $detalle->id_detalle;  // Devolver el ID del tipo entidad
            }
        }

        return null;  // Retorna null si no encuentra el organismo
    }
}
