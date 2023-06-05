<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse {
        $credenciales = $request->validate([
            'usu_email' => ['required', 'email'],
            'usu_password' => ['required'],
        ]);

        dump($credenciales);
 
        if (Auth::attempt($credenciales, false)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'usu_email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('usu_email');
    }
}
