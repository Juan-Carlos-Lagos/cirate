<?php

namespace App\Http\Controllers;

use App\Models\codigo_reporte_accion;
use Illuminate\Http\Request;
use App\Models\directorio;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke()
    {
        $consulta = directorio::query()->where('telefono', '=', '2240752')->get()->first();
        dd(($consulta));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = directorio::query()->where('telefono', '=', '2240752')->get()->first();

        // Obtener la fecha actual
        $hoy = Carbon::now()->toDateString();

        // Obtener los códigos de reporte que tienen la fecha de hoy
        $codigos = codigo_reporte_accion::whereDate('fecha_creacion', $hoy)
            ->get();
        return view('home.home', ['consulta' => $consulta, 'codigos' => $codigos]);
    }


    // pruebas insertar datos para el codigo aun toca cambiar la forma en la que insertan los datos
    public function generarCodigoEmergencia(Request $request)
    {
        $request->validate([
            'codigo_reporte' => 'required',
            'telefono' => 'required|string',
        ]);

        Carbon::setLocale('es');
        $fechaActual = Carbon::now();
        // Busca el id del directorio por numero de telefono
        $telefono = $request->input('telefono');
        $directorio = directorio::where('telefono', $telefono)->first();

        $user = auth()->user();
        $idUsuario = $user->id_usuario;




        $codigoReporte = new codigo_reporte_accion();
        $codigoReporte->codigo = $request->input('codigo_reporte');
        $codigoReporte->fk_id_directorio = $directorio ? $directorio->id_directorio:null;
        $codigoReporte->fk_id_usuario =  $idUsuario;
        //$codigoReporte->fk_id_audio = '1';
        //$codigoReporte->linea = '1';
        $codigoReporte->fecha_creacion = $fechaActual->toDateString();
        $codigoReporte->hora_creacion = $fechaActual->toTimeString();
        $codigoReporte->dia_semana = $fechaActual->translatedFormat('l');


        $codigoReporte->save();

        return redirect()->back()->with('success', 'Código de emergencia generado correctamente.');
    }
}
