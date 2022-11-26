<?php

use App\Http\Controllers\TarefasController;
use App\Http\Controllers\UsersController;
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


//Listar Tarefas
Route::get('/index', [TarefasController::class, 'index']);

//Retornar View de Adicionar Tarefas
Route::get('/tarefas/adicionar', [TarefasController::class, 'create'])->middleware('auth');

//Adicionar Tarefa
Route::post('/tarefas/create', [TarefasController::class, 'store'])->middleware('auth');

//Retornar View de Editar
Route::get('/tarefas/editar/{tarefas}', [TarefasController::class, 'edit'])->middleware('auth');

//Realiza Edição da Tarefa
Route::put('/tarefas/update/{tarefas}', [TarefasController::class, 'update'])->middleware('auth');

//Deleta Tarefa
Route::delete('/tarefas/delete/{tarefas}',[TarefasController::class, 'delete'])->middleware('auth');





//Retorna View de Login
Route::get('/', [UsersController::class, 'login'])->middleware('guest');

//Retorna View de Cadastro
Route::get('/register', [UsersController::class, 'create'])->middleware('guest');

//Realiza Cadastro
Route::post('/users', [UsersController::class, 'store']);

//Realiza Login
Route::post('/users/authenticate', [UsersController::class, 'authenticate']);

//Realiza LogOut
Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth');