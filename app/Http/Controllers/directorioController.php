<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directorioController extends Controller
{
   
    public function buscar()
    {
        return view('Directorio.buscar');
    }

    public function ingresar()
    {
        return view('Directorio.ingresar');
    }

    
}
