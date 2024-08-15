<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function registro(){
        return view('usuarios.nuevo');
    }

    public function registerverify(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password'
        ],[
            'email.required' => 'El email es requerido',
            'email.unique' => 'El email ya ha sido usado'
        ]);
        User::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'email'=>$request->email,
            'password'=> bcrypt($request->password)
        ]);

        return redirect()->route('usuarios.nuevo')->with('success', 'Usuario registrado correctamente');
    }

    
   
}
