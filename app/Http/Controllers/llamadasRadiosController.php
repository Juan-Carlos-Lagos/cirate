<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\registro_audios_radio;
use App\Models\audios;


class llamadasRadiosController extends Controller
{
    public function buscarPorFecha(Request $request)
    {
        $fecha = $request->input('date');

    // 1. Filtrar en la tabla registro_audios_radios y hacer join con las tablas Audios y Radios
    $conversaciones = registro_audios_radio::join('audios', 'registro_audios_radios.fk_id_audio', '=', 'audios.id_audio')
        ->join('radios', 'registro_audios_radios.fk_id_radio', '=', 'radios.id_radio') // JOIN adicional con la tabla radios
        ->whereDate('audios.fecha_recepcion', $fecha) // Filtrar por fecha de recepción
        ->get([
            'registro_audios_radios.*', // Obtener todos los campos de registro_audios_radio
            'audios.*', // Obtener todos los campos de audios
            'radios.alias as alias_radio' // Obtener el alias de la tabla radios
        ]);

    // 2. Retornar los resultados a la vista
    return view('Radios.buscarG', compact('conversaciones'));

    }
    
}