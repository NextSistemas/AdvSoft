<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advogado;
use App\Http\Requests\AdvogadoFormRequest;

class AdvogadoController extends Controller
{
    public function index()
    {
        $advogado = new Advogado;
        //dd($advogados = $advogado->listar());
        $advogados = $advogado->listar();
        return view('painel.advogados.index',compact('advogados'));
    }

    public function novo()
    {
        return view('painel.advogados.novo');
    }
    
    public function store(AdvogadoFormRequest $request, Advogado $advogado)
    {
        //dd($result = $advogado->salvar($request->all()));
        $result = $advogado->salvar($request->all());

        //mostra mensagem para o usuário na view index
        if ($result['success']) {
            return redirect()
                    ->route('advogados.index')
                    ->with('success', $result['message']);

            // Redireciona de volta com uma mensagem de erro
            return redirect()
                ->back()
                ->with('error', $result['message']);
 
        }
    }

    public function mostrar($id)
    {
        //dd($advogado = Advogado::findOrFail($id));
        $advogado = Advogado::findOrFail($id);
        return view('painel.advogados.mostrar', compact('advogado'));
    }

    public function editar($id)
    {
        $advogado = Advogado::findOrFail($id);
        return view('painel.advogados.editar', compact('advogado'));
    }

    public function atualizar(AdvogadoFormRequest $request, $id)
    {
        $advogado = Advogado::findOrFail($id);
        $atualiza = $advogado->update($request->all());  
        
        if ($atualiza) {
            return redirect()
                    ->route('advogados.index')
                    ->with('success', 'Advogado(a) atualizado com sucesso!');
            return redirect()
                    ->back()
                    ->with('error', 'Erro ao atualizar o Advogado(a)!');
        } 

    }

    public function deletar(Request $id, Advogado $advogado)
    {
        //dd($id->toArray());
        $delete = $advogado->deleteID($id->delete);
        
        //mostra mensagem para o usuário na view index
        if ($delete['success']) {
            return redirect()
                    ->route('advogados.index')
                    ->with('success', $delete['message']);

            // Redireciona de volta com uma mensagem de erro
            return redirect()
                ->back()
                ->with('error', $delete['message']);
 
        }
    }
}
