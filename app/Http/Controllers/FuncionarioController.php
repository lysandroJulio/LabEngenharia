<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Funcionario;
use Illuminate\Routing\Redirector;

class FuncionarioController extends Controller{
    
    public function listaFuncionario(){

		$funcionarios = DB::select('select * from funcionarios');
		
		return view('funcionario', compact('funcionarios'));
	}

	public function formularioFuncionario(){

		$cargos = DB::select('select * from cargo');

		return view('cadFuncionario', compact('cargos'));
	}

	public function adicionaFuncionario(Request $request){

		/*
		$parametros = Request::all();
		$funcionario = new Funcionario($parametros);
		
		$funcionario->save();
		*/
		
		$funcionario = Funcionario::create($request->all()); //pesquisar -> form request
		
		//mantem os valores das variaveis acessiveis para a pagina de contrato = withInput();
		//return redirect('/cadastro/contrato/$id'); //->with('cod_funcionario', $funcionario->id);
		return redirect()->route('contrato', [$funcionario]);
	}

}
