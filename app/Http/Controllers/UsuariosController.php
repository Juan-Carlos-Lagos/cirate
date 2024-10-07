<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function registro(){
        // $user=User::get();
        $user = User::orderBy('id_usuario')->paginate(5);
        return view('usuarios.nuevo', compact('user'));
    }

    public function registerverify(Request $request)
    {
        // dd($request->all());
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
                'email' => $request->email,
                'password' => bcrypt($request->password),
                
            ]);
        
        return redirect()->route('usuarios.nuevo')->with('success', 'Usuario registrado correctamente');
    }

    public function nuevo(Request $request){
        
        $user = new User;
        $user->nombres = $request->input('nombre');
        $user->apellidos = $request->input('apellido');
        $user->email = $request->input('email');
        $user->rol = $request->input('rol');
        $user->password = bcrypt($request->input('contraseña'));
        $user->save();
        
        return redirect()->route('show');
    }

    public function show(){
        $user = User::orderBy('id_usuario')->paginate(5);
        return view('usuarios.nuevo', compact('user'));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('show');
    }

}
