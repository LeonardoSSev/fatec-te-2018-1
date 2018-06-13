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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'categoria'], function() {
    Route::get('/list', 'CategoriaController@list')->name('categoria_list');
    Route::get('/create', 'CategoriaController@create')->name('categoria_create');
    Route::post('/store', 'CategoriaController@store')->name('categoria_store');
    Route::get('/edit/{id}', 'CategoriaController@edit')->name('categoria_edit');
    Route::post('/update/{id}', 'CategoriaController@update')->name('categoria_update');
    Route::get('/delete/{id}', 'CategoriaController@delete')->name('categoria_delete');
});

Route::group(['prefix' => 'artigo'], function() {
    Route::get('/list', 'ArtigoController@list')->name('artigo_list');
    Route::get('/create', 'ArtigoController@create')->name('artigo_create');
    Route::post('/store', 'ArtigoController@store')->name('artigo_store');
    Route::get('/edit/{id}', 'ArtigoController@edit')->name('artigo_edit');
    Route::post('/update/{id}', 'ArtigoController@update')->name('artigo_update');
    Route::get('/delete/{id}', 'ArtigoController@delete')->name('artigo_delete');

});
