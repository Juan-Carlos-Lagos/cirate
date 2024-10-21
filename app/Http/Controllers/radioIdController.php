<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\radio;

class radioIdController extends Controller
{

    public function radios(){
        $radios = radio::orderBy('id_radio')->paginate(5);
        return view('Radios.actualizar', compact('radios'));
    }

    public function nuevoradio(Request $request){

        // Validar los datos del formulario
        $request->validate([
            'serial' => 'required|string|max:255',
            'alias' => 'required|string|max:255',
        ]);

        radio::create([
            'serial' => $request->serial,
            'alias' => $request->alias,
        ]);

        return redirect()->route('radios')->with('success', 'Radio creado con éxito');
    }

    public function update(Request $request, radio $radios){
        $request->validate([
            'serial' => 'required|string|max:255',
            'alias' => 'required|string|max:255',
        ]);

        $radios->serial = $request->input('serial');
        $radios->alias = $request->input('alias');
        $radios->save();

        return redirect()->route('radios')->with('success', 'Radio modificado con éxito');
    }
}
