<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advogado;

class AdvogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advogados = Advogado::all();
        return view('painel.advogados.index',compact('advogados', $advogados));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.advogados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            return redirect()
                    ->route('advogados.index')
                    ->with('success', 'Advogado inserido com sucesso!');

            // Redireciona de volta com uma mensagem de erro
            return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Advogado $advogado)
    {
        return view('painel.advogados.show', compact('advogado', $advogado));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
