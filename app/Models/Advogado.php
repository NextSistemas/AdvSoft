<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advogado extends Model
{
    protected $fillable = [
    	    'status',
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

    public function deleteID($id)
    {   //BD::begintransiction;
        $advogado = Advogado::findOrFail($id);
        $advogado->status = 'inativo';
        $advogado->update();
        dd($advogado);
        /*if(){
            BD::commit;
        }else{
            BD::rollback;
        }
        return $advogado;*/
    }
}
