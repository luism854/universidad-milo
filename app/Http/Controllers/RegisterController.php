<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {
        // dd($request);
        // $request->request->add(['email'=>Str::slug($request->email)]);
        $this->validate($request, [
            'name'=> 'required | min:3',
            'lastname'=> 'required | min:3',
            'email'=> 'required | min:5 | unique:estudiantes',
            'date_birthday'=> 'required',
            'password'=> 'required | min:3',
        ]);

        Estudiante::create([
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'date_birthday'=> $request->date_birthday,
            'password'=> Hash::make($request->password),
        ]);
        auth()->guard('estudiante')->attempt($request->only('email','password'));

        //redireccionar
        return redirect() -> route('matricular');
    }
}
