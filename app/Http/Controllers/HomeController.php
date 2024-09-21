<?php

namespace App\Http\Controllers;

use App\Models\detalleTipo;
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
        $codigos = detalleTipo::where('fk_id_tipo', 1)
                ->whereDate('fecha_creacion', $hoy)
                ->get();
        return view('home.home', ['consulta' => $consulta, 'codigos' => $codigos]);
    
    }


    // pruebas insertar datos para el codigo aun toca cambiar la forma en la que insertan los datos
    public function generarCodigoEmergencia(Request $request)
    {
        $request->validate([
            'codigo_reporte' => 'required',
        ]);
        Carbon::setLocale('es');
        $fechaActual = Carbon::now();

       //$user = auth()->user();
        //$nombreUsuario = $user->nombres;


        $codigoReporte = new detalleTipo();
        $codigoReporte->fk_id_tipo = '1';
        $codigoReporte->nombre = $request->input('codigo_reporte');
        $codigoReporte->fecha_creacion = $fechaActual->toDateString();
        //$codigoReporte->hora = $fechaActual->toTimeString();
       //$codigoReporte->diasemana = $fechaActual->translatedFormat('l');
       //$codigoReporte->fknombreusuario =  $nombreUsuario;

        $codigoReporte->save();

        return redirect()->back()->with('success', 'Código de emergencia generado correctamente.');
    }
}
