<?php

use App\Http\Controllers\AnotacoesController;
use App\Http\Controllers\PlantasController;
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

/* Route::get('/', function () {
    return view('planta.index');
}); */
Route::get('/', [PlantasController::class, 'index']);

Route::get('/sobre', function(){
    return view('sobre.index');
});

Route::get('/anotacoes', [AnotacoesController::class, 'index']);
Route::post('/anotacoes/salvar', [AnotacoesController::class, 'store']);
Route::get('/anotacoes/criar', [AnotacoesController::class, 'create']);
Route::get('/planta/criar', [PlantasController::class, 'create']);
Route::post('/planta/salvar', [PlantasController::class, 'store']);
