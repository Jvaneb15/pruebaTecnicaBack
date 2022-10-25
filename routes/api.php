<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//CRUD Alumnos
Route::get('/listar', [EstudiantesController::class, 'listar']);
Route::post('/crear', [EstudiantesController::class, 'crear']);
Route::post('/actualizar', [EstudiantesController::class, 'actualizar']);
Route::post('/estado', [EstudiantesController::class, 'cambiarEstado']);
Route::get('/editarAlumno/{id}', [EstudiantesController::class, 'editar']);

//Listar tipo documentos
Route::get('/listarTipoDocumento', [EstudiantesController::class, 'listarTipoDocumento']);

//Lista cursos
Route::get('/listarCursos', [EstudiantesController::class, 'listarCursos']);

