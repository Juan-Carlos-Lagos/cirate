<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;
use App\Models\codigoreporteaccion;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke()
    {
        /*return view('welcome');*/

        $consulta = directorio::query()->where('telefono', '=', '2240752')->get()->first();
        dd(($consulta));

        // return view('dashboard.home', compact('consulta'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = directorio::query()->where('telefono', '=', '2240752')->get()->first();
       // $codigos = codigoreporteaccion::all();
        //dd( ($consulta));
        // return view('login.login');
        //return view('dashboard.home');
        //------------------------- nueva bd remplazar------------
        // Obtener la fecha actual
       // $hoy = Carbon::now()->toDateString();

        // Obtener los códigos de reporte que tienen la fecha de hoy
       // $codigos = codigoreporteaccion::whereDate('fecha', $hoy)->get();
       // return view('home.home', ['consulta' => $consulta, 'codigos' => $codigos]);
       return view('home.home', ['consulta' => $consulta]);
    }


    // pruebas insertar datos para el codigo
    public function generarCodigoEmergencia(Request $request)
    {
        $request->validate([
            'codigo_reporte' => 'required',
            'telefono' => 'required',
            'nombre' => 'required'
        ]);
        Carbon::setLocale('es');
        $fechaActual = Carbon::now();

        $user = auth()->user();
        $nombreUsuario = $user->nombres;


        $codigoReporte = new codigoreporteaccion();
        $codigoReporte->codigo = $request->input('codigo_reporte');
        $codigoReporte->fktelefonollamada = $request->input('telefono');
        $codigoReporte->fknombrellamada = $request->input('nombre');
        $codigoReporte->fecha = $fechaActual->toDateString();
        $codigoReporte->hora = $fechaActual->toTimeString();
        $codigoReporte->diasemana = $fechaActual->translatedFormat('l');
        $codigoReporte->fknombreusuario =  $nombreUsuario;

        $codigoReporte->save();

        return redirect()->back()->with('success', 'Código de emergencia generado correctamente.');
    }
}
