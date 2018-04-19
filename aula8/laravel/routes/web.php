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

Route::get('/', function () {
    return view('welcome');
});

//DEFININDO NOVAS ROTAS
Route::get('oi', function () {
    return 'Olá mundo!';
});

Route::get('ola', function () {
    $nome = 'Leonardo';
    return view('ola', compact('nome'));
});

Route::get('sobre', function () {
    return view('sobre');
});