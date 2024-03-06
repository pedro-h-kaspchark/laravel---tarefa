<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('/biblioteca', [BibliotecaController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/updateAluno', [AlunoController::class, 'update']);
Route::get('/updateBiblioteca', [BibliotecaController::class, 'update']);
ROute::get('/updatePost', [PostController::class, 'update']);