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
    
    public function criarEstagiario()
    {
       return view('painel.estagiarios.criar');
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

    public function criarColaborador()
    {
        return view('painel.colaboradores.criar');
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

    public function criarTipoProcesso()
    {
        return view('painel.tiposProcessos.criar');
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

    public function criarTribunal()
    {
        return view('painel.tribunais.criar');
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

    public function criarComarca()
    {
        return view('painel.comarcas.criar');
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

    public function criarInstancia()
    {
        return view('painel.instancias.criar');
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

    public function criarVaraForo()
    {
        return view('painel.varasForos.criar');
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

    public function criarProcesso()
    {
        return view('painel.processos.criar');
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

    public function criarCliente()
    {
        return view('painel.clientes.criar');
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
    public function criarAgendamento()
    {
        return view('painel.agendamentos.criar');
    }
    
    //METODOS DE BACKUP "index"
    public function indexBackup()
    {
        return view('painel.backups.index');
    }


}

