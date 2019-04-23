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

Route::get('/contrato', function(){
	return view('contrato');
});

Route::get('/avaliacao', function(){
	return view('avaliacao');
});

Route::prefix('/cadastro')->group(function(){
	Route::post('/funcionario', function(){
		return view('cadfuncionario');
	});
	Route::post('/avaliacao', function(){
		return view('cadavaliacao');
	});
	Route::post('/contrato', function(){
		return view('cadcontrato');
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
