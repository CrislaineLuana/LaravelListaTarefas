<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TarefasController::class, 'index']);
Route::post('/', [TarefasController::class, 'store']);
Route::get('/tarefas/adicionar', [TarefasController::class, 'create']);
Route::post('/tarefas/create', [TarefasController::class, 'store']);
Route::get('/tarefas/editar/{tarefas}', [TarefasController::class, 'edit']);
Route::put('/tarefas/update/{tarefas}', [TarefasController::class, 'update']);
Route::delete('/tarefas/delete/{tarefas}',[TarefasController::class, 'delete']);