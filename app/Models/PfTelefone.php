<?php

namespace ccult\Models;

use Illuminate\Database\Eloquent\Model;

class PfTelefone extends Model
{
    protected $fillable = [
        'pessoa_fisica_id',
        'telefone',
        'celular',
    	'publicado'
    ];

    public $timestamps = false;

    public function pessoaFisica()
    {
    	return $this->belogsTo(PessoaFisica::class);
    }
}
