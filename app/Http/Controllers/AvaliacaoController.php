<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaliacao;
use App\Funcionario;


class AvaliacaoController extends Controller
{
    public function listaFuncionariosComAvaliacao(){

		$funcionarios = Funcionario::all();
		
		return view('buscaAvaliacao', compact('funcionarios'));
	}
}
