<?php

use App\Models\agendamentos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentosController;

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
//Route::get('/consulta', function () {
  //  return view('consulta');
//});

Route::get('/consulta', [AgendamentosController::class, 'index']);

Route::get('/', function () {
    return view('index');
});

Route::post('/cadastrar', [AgendamentosController::class, 'store']);

Route::get('/editar', function () {
  return view('editar');
});

Route::get('/editar/{id}', [AgendamentosController::class, 'edit']);
Route::put('/atualizar/{id}', [AgendamentosController::class, 'update']);
Route::delete('/excluir/{id}', [AgendamentosController::class, 'delete']);
