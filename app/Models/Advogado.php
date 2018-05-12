<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    //metodo para listar todos os dados de advogado na view index
    public function listar()
    {
        DB::beginTransaction();
        //dd($advogados = Advogado::where('status','Inativo')->get());
        $advogados = Advogado::where('status','Ativo')->get();
        return $advogados;
    }

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
