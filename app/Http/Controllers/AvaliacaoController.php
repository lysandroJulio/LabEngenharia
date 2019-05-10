<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Avaliacao;
use App\Funcionario;


class AvaliacaoController extends Controller
{

	public function listaFuncionariosComAvaliacao(Request $request){

		function inverteDataParaTela($data, $separador){
			return implode('/',array_reverse(explode($separador, $data )));
		}

		$cod_funcionario = $request->route('id');
		
		$funcionario = DB::select("select f.cod_funcionario, f.nome_funcionario, co.cod_contrato, co.data_admissao, co.data_demissao, co.obra_trabalhada,
		co.observacoes_contrato, co.acao_judicial, co.testemunha_judicial ,c.cod_cargo, c.descricao_cargo, a.cod_avaliacao ,a.conhecimento_pratico, 
		a.relacionamento_superior, a.relacionamento_equipe, a.respeita_normas, a.assiduidade, a.epis_correto, a.cuidado_ferramentas,
		a.dinamico, a.comportamento_obra, a.comportamento_alojamento from funcionarios f join contrato co 
		on f.cod_funcionario = co.cod_funcionario join cargo c on c.cod_cargo = f.cod_cargo join avaliacao a 
        on co.cod_contrato = a.cod_contrato where f.cod_funcionario = {$cod_funcionario} AND
		f.D_E_L_E_T_ is null and co.D_E_L_E_T_ is null and c.D_E_L_E_T_ is null and a.D_E_L_E_T_ is null");

		$funcionario[0]->data_admissao = inverteDataParaTela($funcionario[0]->data_admissao, '-');
		$funcionario[0]->data_demissao = inverteDataParaTela($funcionario[0]->data_demissao, '-');

		  
		$conta = $funcionario[0]->conhecimento_pratico + ($funcionario[0]->relacionamento_superior *2) + ($funcionario[0]->relacionamento_equipe *2) +	$funcionario[0]->respeita_normas + ($funcionario[0]->assiduidade *3) + $funcionario[0]->epis_correto + $funcionario[0]->cuidado_ferramentas + ($funcionario[0]->dinamico *3) + ($funcionario[0]->comportamento_obra *2) + ($funcionario[0]->comportamento_alojamento *2);
		$resultado = ($conta/72)*100;
		array_push($funcionario, $resultado);

		return view('mostraAvaliacao', compact('funcionario'));
	}

    public function listaFuncionariosSemAvaliacao(){

		//$funcionarios = Funcionario::all();

		$funcionarios = DB::table('funcionarios')->join('contrato', 'funcionarios.cod_funcionario', '=', 'contrato.cod_funcionario')->select('funcionarios.*')->whereNull('contrato.data_demissao')->get();
		
		return view('buscaAvaliacao', compact('funcionarios'));
	}

	public function redirectAvaliacao(Request $request){

		$id = $request->input('cod_funcionario');

		return redirect()->route('avaliacao', $id);
	}

	public function redirectBusca(Request $request){

		$id = $request->input('cod_funcionario');

		return redirect()->route('buscaAvaliacao', $id);
	}

	public function formularioAvaliacao(Request $request){


		function inverteDataParaTela($data, $separador){
			return implode('/',array_reverse(explode($separador, $data )));
		}
		
		$cod_funcionario = $request->route('id');	
		//$funcionario = Funcionario::where('cod_funcionario', $cod_funcionario)->first();
		
		$funcionario = DB::select("select f.cod_funcionario, f.nome_funcionario, co.cod_contrato, co.data_admissao, co.data_demissao, co.obra_trabalhada,
		co.observacoes_contrato, c.cod_cargo, c.descricao_cargo from funcionarios f join contrato co join cargo c where
		f.cod_funcionario = co.cod_funcionario and c.cod_cargo = f.cod_cargo and co.data_demissao is null 
		and f.cod_funcionario = {$cod_funcionario} and f.D_E_L_E_T_ is null and co.D_E_L_E_T_ is null and c.D_E_L_E_T_ is null");

		$funcionario[0]->data_admissao = inverteDataParaTela($funcionario[0]->data_admissao, '-');

		return view('cadAvaliacao', compact('funcionario'));
	}

	public function adicionaAvaliacao(Request $request){

		function inverteDataParaBanco($data, $separador){
			return implode('-',array_reverse(explode($separador, $data )));
		}

		$request->data_demissao = inverteDataParaBanco($request->data_demissao,'/');

		//adiciona a data da demissao no contrato do funcionario
		$contrato = DB::table('contrato')->where('cod_contrato', $request->cod_contrato)->update(['data_demissao' => $request->data_demissao]);

		//adiciona a avaliacao do funcionario
		$avaliacao = Avaliacao::create($request->all());

		return redirect()->route('funcionarios');
	}
}
