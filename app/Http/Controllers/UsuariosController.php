<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        return view('usuarios.index');
    }
    public function create(){
        return view('usuarios.create');
    }
    public function show(){
        return view('usuarios.show') ; 
    }
}
