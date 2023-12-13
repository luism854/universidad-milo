<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdministrarController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/matricular', [MatriculaController::class, 'index'])->name('matricular');

Route::get('/administrar', [AdministrarController::class, 'index'])->name('administrar');

Route::get('/profesores', [ProfesoresController::class, 'index'])->name('profesores');
Route::post('/profesores', [ProfesoresController::class, 'store']);
Route::delete('/profesores/{profesor}', [ProfesoresController::class, 'eliminar'])->name('profesores.eliminar');

Route::get('/cursos', [CursoController::class, 'index'])->name('cursos');
Route::post('/cursos', [CursoController::class, 'store']);
Route::delete('/cursos/{curso}', [CursoController::class, 'eliminar'])->name('cursos.eliminar');

Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/muro', [PostController::class, 'index'])->name('post.index');