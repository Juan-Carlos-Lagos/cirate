<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;

class directorioController extends Controller
{
   
    public function buscar(Request $request)
    {
        $numero=$request->get('numero');
        $telefonos=directorio::query()   
                            ->select('nombre','telefono','ciudad','direccion','comentario')
                            ->where('telefono','=', $numero)
                            ->get();         
        return view('directorio.buscar', compact('telefonos', 'numero'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|string',
            'cliente' => 'required|string',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'comentario' => 'nullable|string',
        ]);
        
        $telefono = new directorio;
        $telefono->nombre = $request->input('cliente');
        $telefono->telefono = $request->input('numero');
        $telefono->ciudad = $request->input('ciudad');
        $telefono->direccion = $request->input('direccion');
        $telefono->comentario = $request->input('comentario');
        $telefono->save();

        return redirect()->route('ingresar')->with('success', 'Teléfono creado con éxito');
    }

    public function ingresar(){
        return view('directorio.ingresar');
    }

    
}
