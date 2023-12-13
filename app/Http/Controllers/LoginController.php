<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->guard('estudiante')->attempt($credentials)) {
            return redirect()->route('matricular');
        }

        if (auth()->attempt($credentials)) {
            return redirect()->route('administrar');
        }
        return back()->with('mensaje', 'Credenciales incorrectas');
    }
}
