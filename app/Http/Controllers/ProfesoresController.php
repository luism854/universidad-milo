<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesores;

class ProfesoresController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $profesores = Profesores::all();
        return view('auth.profesores', compact('profesores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required | min:3',
            'lastname'=> 'required | min:3',
            'email'=> 'required | min:5 | unique:profesores',
            'area'=> 'required',
        ]);

        Profesores::create([
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'area'=> $request->area,
        ]);
        
        return redirect() -> route('profesores');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(Profesores $profesor)
    {
        $profesor->delete();

        return redirect()->route('profesores')->with('success', 'Profesor eliminado exitosamente.');
    }
}
