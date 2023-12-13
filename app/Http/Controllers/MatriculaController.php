<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesores;

class MatriculaController extends Controller
{

    public function __construct() {
        $this->middleware('estudiante.auth');
    }

    public function index() {
        $profesores = Profesores::all();
        return view('auth.matricula', compact('profesores'));
    }

    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
