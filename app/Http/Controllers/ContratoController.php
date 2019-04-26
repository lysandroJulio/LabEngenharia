<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contrato;


class ContratoController extends Controller{

	public function formularioContrato(){
		return view('cadContrato');
	}

	public function adicionaContrato(Request $Request){
		Contrato::create($request->all());

		return redirect('/funcionario')->withInput();

	}
}