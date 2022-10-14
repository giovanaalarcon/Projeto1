<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BancoController;

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

Route::get('/banco/acrescentar', [Controller::class, 'acrescentar']);

Route::get('/alunos', function() {
    $busca = request('search');
    return view('alunos', ['busca' => $busca]);
});

Route::get('/materias', function() {
    $busca = request('search');
    return view('materias', ['busca' => $busca]);
});

Route::get('/professores', function() {
    $busca = request('search');
    return view('professores', ['busca' => $busca]);
});