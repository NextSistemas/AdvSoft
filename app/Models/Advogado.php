<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advogado extends Model
{
    protected $fillable = [
    	'situacao',
            'nome',
            'oab',
            'celular',
            'telefone',
            'email',
            'cep',
            'endereco',
            'complemento',
            'numero',
            'bairro',
            'cidade',
            'uf',
            'descricao'
    ];
}
