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
            'rua',
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

    //metodo para salvar um advogado pegando esses dados da view
    public function salvar($advogado)
    {
        DB::beginTransaction();
        //dd($advogado);
        $advogado = Advogado::create([
            'status' => 'ativo',
            'nome' => $advogado['nome'],
            'oab' => $advogado['oab'],
            'celular' => $advogado['celular'],
            'telefone' => $advogado['telefone'],
            'email' => $advogado['email'],
            'cep' => $advogado['cep'],
            'rua' => $advogado['rua'],
            'complemento' => $advogado['complemento'],
            'numero' => $advogado['numero'],
            'bairro' => $advogado['bairro'],
            'cidade' => $advogado['cidade'],
            'uf' => $advogado['uf'],
            'descricao' => $advogado['descricao']
        ]);

        //verifica se o cadastro foi efetuado com sucesso
        if ($advogado) {
            DB::commit();

            return [
                'success' => true,
                'message' => 'Advogado(a) cadastrado com sucesso!'
            ];
        } else {
            DB::rollback();

            return [
                'sucess' => false,
                'message' => 'Falha ao cadastrar Advogado(a)'
            ];
        }
        
    }

    //metodo para excluir um advogado pelo id
    public function deleteID($id)
    {   
        DB::beginTransaction();

        $advogado = Advogado::findOrFail($id);
        $advogado->status = 'inativo';
        $advogado->update();
        //dd($advogado);

        //verifica se houve a "exclusão" com sucesso
        if ($advogado) {
            DB::commit();

            return [
                'success' => true,
                'message' => 'Advogado(a) excluido com sucesso!'
            ];
        } else {
            DB::rollback();

            return [
                'sucess' => false,
                'message' => 'Falha ao excluir Advogado(a)'
            ];
        }
    }
}
