<?php

namespace ccult\Models;

use Illuminate\Database\Eloquent\Model;

class PjTelefone extends Model
{
    protected $fillable = [
        'pessoa_juridica_id',
        'telefone',
        'celular',
    	'publicado'
    ];

    public $timestamps = false;

    public function pessoaJuridica()
    {
    	return $this->belogsTo(PessoaJuridica::class);
    }
}
