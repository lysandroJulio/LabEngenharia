<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Funcionario;

class FuncionarioController extends Controller{
    
    public function listaFuncionario(){

		$funcionarios = DB::select('select * from funcionarios');
		
		return view('funcionario', compact('funcionarios'));
	}

	public function formularioFuncionario(){

		$cargos = DB::select('select * from cargo');

		return view('cadFuncionario', compact('cargos'));
	}

	public function adicionaFuncionario(){

		/*
		$parametros = Request::all();
		$funcionario = new Funcionario($parametros);
		
		$funcionario->save();
		*/

		Funcionario::create(Request::all());

		//mantem os valores das variaveis acessiveis para a pagina de contrato
		return redirect('/cadastro/contrato')->withInput();
	}

}
