<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\radio;

class radioIdController extends Controller
{
    
    /**
     * Muestra la vista para actualizar y crear radios.
     *
     * @return \Illuminate\View\View
     */
    public function cargaTabla()
    {
        $radios = radio::paginate(5); // Obtener todos los radios desde la base de datos

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
            'serial' => 'required|string|max:255',
            'alias' => 'required|string|max:255',
        ]);

        radio::create([
            'serial' => $request->serial,
            'alias' => $request->alias,
        ]);

        // Redireccionar a una ruta después de la creación exitosa
        return redirect()->route('radios.cargaTabla')->with('success', 'Radio creado exitosamente.');
    }

    public function destroy(radio $radios){
        $radios->delete();
        return redirect()->route('radios.cargaTabla');
    }

    public function update(Request $request, radio $radios){
        $request->validate([
            'serial' => 'required|string|max:255',
            'alias' => 'required|string|max:255',
        ]);

        $radios->serial = $request->input('serial');
        $radios->alias = $request->input('alias');
        $radios->save();

        return redirect()->route('radios.cargaTabla');
    }
}
