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

Route::prefix('produtos')->group(function () {

    Route::get('/', function () {
        return view('produtos.lista');
    });

    Route::get('/create', function () {
        return view('produtos.cadastro');
    })->name('produtos.create');

});

Route::prefix('categorias')->group(function () {

    Route::get('/', function () {
        return view('categorias.lista');
    });

    Route::get('/create', function () {
        return view('categorias.cadastro');
    })->name('categorias.create');

});
