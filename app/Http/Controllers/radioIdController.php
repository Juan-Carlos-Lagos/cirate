<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\radios;

class radioIdController extends Controller
{
    
    /**
     * Muestra la vista para actualizar y crear radios.
     *
     * @return \Illuminate\View\View
     */
    public function cargaTabla()
    {
        $radios = radios::all(); // Obtener todos los radios desde la base de datos

        return view('radios.actualizar', compact('radios'));
    }

    /**
     * Crea un nuevo radio en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function nuevoRadio(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'idRadio' => 'required|string|max:255',
            'aliasRadio' => 'required|string|max:255',
        ]);

        radios::create([
            'idradio' => $request->idRadio,
            'aliasradio' => $request->aliasRadio,
        ]);

        // Redireccionar a una ruta después de la creación exitosa
        return redirect()->route('radios.cargaTabla')->with('success', 'Radio creado exitosamente.');
    }
    
}
