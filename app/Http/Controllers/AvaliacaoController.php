<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaliacao;
use App\Funcionario;


class AvaliacaoController extends Controller
{
    public function listaFuncionariosSemAvaliacao(){

		$funcionarios = Funcionario::all();
		
		return view('buscaAvaliacao', compact('funcionarios'));
	}

	public function redirectAvaliacao(Request $request){

		$id = $request->input('cod_funcionario');

		return redirect()->route('avaliacao', $id);

	}

	public function formularioAvaliacao(Request $request){

		/*
		"SELECT f.cod_funcionario, f.nome_funcionario, co.cod_contrato, co.data_admissao, co.data_demissao, co.obra_trabalhada,
		co.observacoes_contrato, c.cod_cargo, c.descricao_cargo from funcionarios f join contrato co join cargo c where
		f.cod_funcionario = co.cod_funcionario and c.cod_cargo = f.cod_cargo and co.data_demissao = ''
		and f.cod_funcionario = {$codFuncionario} and f.D_E_L_E_T_ is null and co.D_E_L_E_T_ is null and c.D_E_L_E_T_ is null"
		*/

		
		$cod_funcionario = $request->route('id');	
		$funcionario = Funcionario::where('cod_funcionario', $cod_funcionario)->first();
		
		return view('cadAvaliacao', compact('funcionario'));
	}
}
