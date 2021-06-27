<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipiosController;

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
    return view('welcome');
});

Route::get('/municipios',[MunicipiosController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);

Route::get('/unidadesFederativas', function () {
    return view('unidadesFederativas');
    // Route::get('/municipios', function () {
    //     return view('municipios');
    // });
});

//Chamar Função - Exemplo
// Route::get('/municipios', 'NomeController@MetodoDoController');