<?php

use App\Http\Controllers\AnotacoesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

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
Route::get('/', function(){
    return to_route('plantas.index');
})->middleware(Autenticador::class);

Route::get('/sobre', function(){
    return view('sobre.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/registrar', [UsersController::class, 'create'])->name('create');
Route::post('/registrar', [UsersController::class, 'store'])->name('users.store');

Route::resource('/plantas', PlantasController::class);

Route::resource('/anotacoes', AnotacoesController::class);

Route::resource('/ESP', ESPController::class);