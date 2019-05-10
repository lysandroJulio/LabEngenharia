<?php

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/cadastro')->group(function(){
	
	Route::get('/funcionario', 'FuncionarioController@formularioFuncionario');

	Route::post('/funcionario/adicionar', 'FuncionarioController@adicionaFuncionario');
	
	Route::get('/contrato/{id}', 'ContratoController@formularioContrato')->name('contrato');
	
	Route::post('/contrato/adicionar', 'ContratoController@adicionaContrato');
	
	Route::get('/avaliacao/redirect', 'AvaliacaoController@redirectAvaliacao');
	
	Route::get('/avaliacao/{id}', 'AvaliacaoController@formularioAvaliacao')->name('avaliacao');

	Route::post('/avaliacao/adicionar', 'AvaliacaoController@adicionaAvaliacao');

	Route::get('/usuario', function(){
		return view('cadUsuario');
	});
});

Route::prefix('/busca')->group(function(){

	Route::get('/funcionarios', 'FuncionarioController@listaFuncionario')->name('funcionarios');
	
	Route::get('/avaliacao', 'AvaliacaoController@listaFuncionariosSemAvaliacao');

	Route::get('/avaliacao/redirect', 'AvaliacaoController@redirectBusca');

	Route::get('/avaliacao/{id}', 'AvaliacaoController@listaFuncionariosComAvaliacao')->name('buscaAvaliacao');

	Route::get('/funcionario', function(){
		return view('bfuncionario');
	});

	Route::get('/usuario', function(){
		return view('busuario');
	});
});

Route::get('/contrato', function(){
	return view('contrato');
});

Route::get('/avaliacao', function(){
	return view('avaliacao');
});


/*
Route::get('/contrato/{id}', function(){
	return view('cadteste');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
	return view('login');
});
*/