<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register()
    {
        return view('login.registro');
    }
    //dd($request->all());

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

        return redirect()->route('login')->with('success', 'Usuario registrado correctamente');
    }

    public function login(){
        return view('login.login');
    }
    public function loginVerify(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:4'
        ],[
            'email.required' => 'El email es requerido',
            'email.unique' => 'El email ya ha sido usado'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()-> route('dashboard');
        }

        return back()->withErrors(['invalid_credencials'=>'Usuario o contraseña invalido'])->withInput();
    }

    public function signOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        
        return redirect()->route('login')->with('success','session cerrada correctamente');
    }










    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}