<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', 'ProdutosController@create');
Route::post('/produtos/novo', 'ProdutosController@store')
->name('registrar_produto');
Route::get('/produto/ver/{id}', 'ProdutosController@show');
Route::get('/produto/editar/{id}', 'ProdutosController@edit');
Route::post('/produto/editar/{id}', 'ProdutosController@update')
->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'ProdutosController@delete');
Route::post('/produto/excluir/{id}', 'ProdutosController@destroy')
->name('excluir_produto');



