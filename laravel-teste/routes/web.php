<?php

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
use App\Entities\Cliente;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    // Exemplo get básico
    $cliente = new Cliente();
    return $cliente->get()->toArray();
});


Route::get('/cliente/cadastro', function () {
    // Exemplo get básico
    // $cliente = new Cliente();
    // $cliente->get()->toArray();
    // dd($cliente->get()->toArray());
    return view('cadastro');
});
