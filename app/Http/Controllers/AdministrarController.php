<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesores;
use App\Models\Curso;

class AdministrarController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $profesores = Profesores::all();
        $cursos = Curso::all();
        return view('auth.administrar', compact('profesores'), compact('cursos'));
    }
}
