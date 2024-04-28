<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telefonos;

class HomeController extends Controller
{
    public function __invoke(){
        /*return view('welcome');*/

    $consulta = telefonos::query()->where('numero','=','2254788')->get()->first();
    // dd( ($consulta));

    return view('home.home', compact('consulta'));
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('login.login');
        return view('home');
    }
// pruebas
    public function prueba(Request $request){
     return $request->all();
    }
}
