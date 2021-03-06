<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    //vincula a classe a tabela no banco
	protected $table = 'avaliacao';
    
    //ignora os campos de datacriacao e dataupdate no banco
    public $timestamps = false;

    protected $fillable = array('cod_avaliacao','conhecimento_pratico','relacionamento_superior','relacionamento_equipe','respeita_normas','assiduidade','epis_correto','cuidado_ferramentas','dinamico','comportamento_obra','comportamento_alojamento','cod_contrato');

}
