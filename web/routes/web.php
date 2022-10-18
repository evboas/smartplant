<?php

use App\Http\Controllers\AnotacoesController;
use App\Http\Controllers\PlantasController;
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
});

Route::get('/sobre', function(){
    return view('sobre.index');
});

Route::resource('/plantas', PlantasController::class);
Route::resource('/anotacoes', AnotacoesController::class);