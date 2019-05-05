<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    //vincula a classe a tabela no banco
	protected $table = 'avaliacao';
    
    //ignora os campos de datacriacao e dataupdate no banco
    public $timestamps = false;

}
