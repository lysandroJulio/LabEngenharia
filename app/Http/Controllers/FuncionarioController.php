<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FuncionarioController extends Controller
{
    public function listaFuncionario(){

		$funcionarios = DB::select('select * from funcionarios');
		
		return view('funcionario', compact('funcionarios'));
	}
}
