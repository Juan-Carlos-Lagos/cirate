<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conversaciones_radio;


class radiosController extends Controller
{
    public function buscarPorFecha(Request $request)
    {
        
         // Validar la fecha
        //   $request->validate([
        //       'date' => 'required|date',
        //   ]);
       

         // Obtener la fecha del request
          $fecha = $request->input('date');

          // Consultar las conversaciones de radio por fecha
          $conversaciones = conversaciones_radio::whereDate('fechainicio', $fecha)
              ->orWhereDate('fechafin', $fecha)
              ->get();

         // Retornar la vista con los resultados
        return view('Radios.buscarG', ['conversaciones' => $conversaciones]);
        //return view('Radios.buscarG');
    }

     
    
}
