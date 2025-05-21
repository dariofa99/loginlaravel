<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        Auth::logout();
        return view('login');
    }

    public function login(Request $request)
    {
     
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect("/usuarios");
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        // Si la autenticación es exitosa, redirigir a la página de inicio
       
    }

    public function logout()
    {
        // Aquí puedes agregar la lógica para cerrar sesión
        // Por ejemplo, usando el método logout de Auth

        // Redirigir a la página de inicio de sesión
        return redirect()->route('login');
    }




}
