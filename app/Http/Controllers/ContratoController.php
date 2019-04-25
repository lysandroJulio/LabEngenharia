<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContratoController extends Controller{

	public function formularioContrato(){
		return view('cadContrato');
	}

}