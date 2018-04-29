<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advogado;

class AdvogadoController extends Controller
{
    public function index()
    {
        $advogados = Advogado::all();
        return view('painel.advogados.index',compact('advogados'));
    }

    public function novo()
    {
        return view('painel.advogados.novo');
    }
    
    public function store(Request $request, Advogado $advogado)
    {
        //validação
        $request->validate([
            
            'situacao' => 'required',
            'nome' => 'required',
            'oab' => 'required',
            'celular' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'complemento' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
        ]);

        /*$advogado = Advogado::create([
            'situacao' => $request->situacao,
            'nome' => $request->nome,
            'oab' => $request->oab,
            'celular' => $request->celular,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'descricao' => $request->descricao

        ]);*/
        $insere = $advogado->create($request->all());

        // Verifica se inseriu com sucesso
        // Redireciona para a listagem das categorias
        // Passa uma session flash success (sessão temporária)
        if ($insere) {
            return redirect('/painel/advogados/'.$advogado->id)
                    ->with('success', 'Advogado inserido com sucesso!');

            // Redireciona de volta com uma mensagem de erro
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
 
        }
    }

    public function mostrar($id)
    {
        $advogado = Advogado::find($id);
        return view('painel.advogados.mostrar', compact('advogado'));
    }

    public function editar($id)
    {
        $advogado = Advogado::findOrFail($id);
        return view('painel.advogados.editar', compact('advogado'));
    }

    public function atualizar(Request $request, $id)
    {
        $advogado = Advogado::findOrFail($id);

        $advogado->update($request->all());  
        
        \Session::flash('success', 'Advogado atualizado com sucesso!');
        return redirect('/painel/advogados');
    }

    public function deletar($id)
    {
        $advogado = Advogado::findOrFail($id);
        $advogado->delete();
        \Session::flash('success', 'Advogado deletado com sucesso!');
        return redirect('/painel/advogados');        
    }
}
