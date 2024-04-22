<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        /*return view('welcome');*/
    return view('home.home');
    }
// pruebas
    public function prueba(Request $request){
     return $request->all();
    }
}
