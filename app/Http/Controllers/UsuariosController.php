<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function usuarios(){
        $user = User::orderBy('id_usuario')->paginate(5);
        return view('usuarios.nuevo', compact('user'));
    }
    
    public function nuevo(Request $request){
        
        $user = new User;
        $user->nombres = $request->input('nombre');
        $user->apellidos = $request->input('apellido');
        $user->email = $request->input('email');
        $user->rol = $request->input('rol');
        $user->password = bcrypt($request->input('contraseña'));
        $user->save();
        
        return redirect()->route('usuarios');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('usuarios');
    }

    public function update(Request $request, User $user){
        // dd($user);
        // dd($request->all());
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id_usuario . ',id_usuario',
            'rol-edit2' => 'required|string',
        ]);

        $user->nombres = $request->input('nombre');
        $user->apellidos = $request->input('apellido');
        $user->email = $request->input('email');
        $user->rol = $request->input('rol-edit2');
        $user->save();

        return redirect()->route('usuarios');
    }
}
