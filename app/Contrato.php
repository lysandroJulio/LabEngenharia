<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model{
    //vincula a classe a tabela no banco
	protected $table = 'contrato';
    
    //ignora os campos de datacriacao e dataupdate no banco
    public $timestamps = false;

    //delimita quais paramentros sao aceitos com o request::all() do controler
    protected $fillable = array('data_admissao', 'acao_judicial', 'testemunha_judicial', 'observacoes_contrato', 'obra_trabalhada', 'cod_funcionario');
}
