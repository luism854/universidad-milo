<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Profesores;

class CursoController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $cursos = Curso::all();
        $profesores = Profesores::all();
        return view('auth.cursos', compact('cursos'), compact('profesores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'=> 'required | min:3',
            'codigo'=> 'required | min:1',
            'profesor'=> 'required',
        ]);

        Curso::create([
            'nombre'=> $request->nombre,
            'codigo'=> $request->codigo,
            'profesor'=> $request->profesor,
        ]);

        return redirect()->route('cursos');
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
    public function eliminar(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos')->with('success', 'Curso eliminado exitosamente.');
    }
}
