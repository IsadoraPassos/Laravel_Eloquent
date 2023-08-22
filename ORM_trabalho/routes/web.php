<?php

use App\Http\Controllers\AtorController;
use App\Http\Controllers\HistoriaDeUsuarioController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\TarefaController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('projetos', ProjetoController::class);
Route::resource('tarefas', TarefaController::class);

