<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contrato;
use App\Http\Controllers;

class ContratoController extends Controller{

	public function formularioContrato(Request $request){

		$cod_funcionario = $request->route('id');

		return view('cadContrato', compact('cod_funcionario'));
	}

	public function adicionaContrato(Request $request){
		
		/*
		$id = $request->input('id');
		
		$nomeArray = array('cod_funcionario');
		$valorArray = array($id);
		$codigoFuncionario = array_combine($nomeArray, $valorArray);

		$parametros = $request->all();
		$arrayCompleto = array_merge($parametros, $codigoFuncionario);
		print_r($result);
		die();
		*/
		function inverteDataParaBanco($data, $separador){
			return implode('-',array_reverse(explode($separador, $data )));
		}

		$data_admissao = inverteDataParaBanco($request->data_admissao, '/');
		$acao_judicial = $request->acao_judicial;
		$testemunha_judicial = $request->testemunha_judicial;
		$observacoes_contrato = $request->observacoes_contrato;
		$obra_trabalhada = $request->obra_trabalhada;
		$cod_funcionario = $request->cod_funcionario;

		$nomeArray = array('data_admissao', 'acao_judicial', 'testemunha_judicial', 'observacoes_contrato', 'obra_trabalhada', 'cod_funcionario');
		$valorArray = array($data_admissao, $acao_judicial, $testemunha_judicial, $observacoes_contrato, $obra_trabalhada, $cod_funcionario);
		$parametros = array_combine($nomeArray, $valorArray);

		$contrato = new Contrato($parametros);
		$contrato->save();

		return redirect('/funcionario')->withInput();



	}

	 
}