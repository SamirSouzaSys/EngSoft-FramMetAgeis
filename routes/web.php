<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\UnidadesFederativasController;

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
    return view('index');
});

// Route::get('/user', [UserController::class, 'index']);
Route::get('/municipios',[MunicipiosController::class, 'index']);

Route::get('/unidadesFederativas',[UnidadesFederativasController::class, 'index']);

//Chamar Função - Exemplo
// Route::get('/municipios', 'NomeController@MetodoDoController');