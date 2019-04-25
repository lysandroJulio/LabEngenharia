<?php

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

/*

Route::get('/', function () {
    return view('index');
});

*/

Route::get('/login', function(){
	return view('login');
});

Route::get('/funcionario', 'FuncionarioController@listaFuncionario');


Route::prefix('/cadastro')->group(function(){
	
	Route::get('/funcionario', 'FuncionarioController@formularioFuncionario');

	Route::post('/funcionario/adicionar', 'FuncionarioController@adicionaFuncionario');
	
	Route::post('/contrato', 'ContratoController@formularioContrato');

	Route::post('/avaliacao', function(){
		return view('cadavaliacao');
	});
	
	Route::post('/usuario', function(){
		return view('cadusuario');
	});
});

Route::prefix('/busca')->group(function(){
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