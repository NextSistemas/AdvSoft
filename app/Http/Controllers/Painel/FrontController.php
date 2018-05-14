<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    //METODOS DE FINANÇA FinancaController "index,criar,mostrar,store,destroy"
    public function indexFinancas(){
       return view('painel.financas.index');
    }


   //METODOS DO ESTAGIARIO "index,criar,mostrar,store,destroy"
    public function indexEstagiario()
    {
       return view('painel.estagiarios.index');
    }
    
    public function mostrarEstagiario()
    {
       return view('painel.estagiarios.mostrar');
    }
    
    public function novoEstagiario()
    {
       return view('painel.estagiarios.novo');
    }

    //METODOS DE COLABORADOR "index,criar,mostrar,store,destroy"
    public function indexColaborador()
    {
        return view('painel.colaboradores.index');
    }

    public function mostrarColaborador()
    {
        return view('painel.colaboradores.mostrar');
    }

    public function novoColaborador()
    {
        return view('painel.colaboradores.novo');
    }

    //METODOS DE TIPOS DE PROCESSOS "index,criar,mostrar,store,destroy"
    public function indexTipoProcesso()
    {
        return view('painel.tiposProcessos.index');
    }

    public function mostrarTipoProcesso()
    {
        return view('painel.tiposProcessos.mostrar');
    }

    public function novoTipoProcesso()
    {
        return view('painel.tiposProcessos.novo');
    }

    //METODOS DE TRIBUNAIS "index,criar,mostrar,store,destroy"
    public function indexTribunal()
    {
        return view('painel.tribunais.index');
    }

    public function mostrarTribunal()
    {
        return view('painel.tribunais.mostrar');
    }

    public function novoTribunal()
    {
        return view('painel.tribunais.novo');
    }

    //METODOS DE COMARCAS "index,criar,mostrar,store,destroy"
    public function indexComarca()
    {
        return view('painel.comarcas.index');
    }

    public function mostrarComarca()
    {
        return view('painel.comarcas.mostrar');
    }

    public function novoComarca()
    {
        return view('painel.comarcas.novo');
    }

    //METODOS DE INSTANCIAS "index,criar,mostrar,store,destroy"
    public function indexInstancia()
    {
        return view('painel.instancias.index');
    }

    public function mostrarInstancia()
    {
        return view('painel.instancias.mostrar');
    }

    public function novoInstancia()
    {
        return view('painel.instancias.novo');
    }

    //METODOS DE VARAS/FOROS "index,criar,mostrar,store,destroy"
    public function indexVaraForo()
    {
        return view('painel.varasForos.index');
    }

    public function mostrarVaraForo()
    {
        return view('painel.varasForos.mostrar');
    }

    public function novoVaraForo()
    {
        return view('painel.varasForos.novo');
    }

    //METODOS DE PROCESSOS "index,criar,mostrar,store,destroy"
    public function indexProcesso()
    {
        return view('painel.processos.index');
    }

    public function mostrarProcesso()
    {
        return view('painel.processos.mostrar');
    }

    public function novoProcesso()
    {
        return view('painel.processos.novo');
    }
    
    //METODOS DE CLIENTES "index,criar,mostrar,store,destroy"
    public function indexCliente()
    {
        return view('painel.clientes.index');
    }

    public function mostrarCliente()
    {
        return view('painel.clientes.mostrar');
    }

    public function novoCliente()
    {
        return view('painel.clientes.novo');
    }

    //METODOS DE AGENDAMENTOS "index,criar,mostrar,store,destroy"
    public function indexAgendamento()
    {
        return view('painel.agendamentos.index');
    }
    public function mostrarAgendamento()
    {
        return view('painel.agendamentos.mostrar');
    }
    public function novoAgendamento()
    {
        return view('painel.agendamentos.novo');
    }
    
    //METODOS DE BACKUP "index"
    public function indexBackup()
    {
        return view('painel.backups.index');
    }


}

