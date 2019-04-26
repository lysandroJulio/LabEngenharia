<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
	//vincula a classe a tabela no banco
	protected $table = 'funcionarios';
    
    //ignora os campos de datacriacao e dataupdate no banco
    public $timestamps = false;

    //delimita quais paramentros sao aceitos com o request::all() do controler
    protected $fillable = array('cod_funcionario', 'cpf_funcionario', 'nome_funcionario', 'telefone1','telefone2','cod_cargo');
}
