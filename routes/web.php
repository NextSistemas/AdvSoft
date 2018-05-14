<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

$this->group(['middleware' => ['auth'], 'namespace' => 'Painel', 'prefix' => 'painel'], function (){

	$this->get('/', 'PainelController@index')->name('painel');
	
	//rotas para advogados	
	$this->get('advogados', 'AdvogadoController@index');
	$this->get('advogados/novo', 'AdvogadoController@novo');
	$this->post('advogados', 'AdvogadoController@store');
	$this->get('advogados/{id}', 'AdvogadoController@mostrar');	
	$this->get('advogados/{id}/editar', 'AdvogadoController@editar');
	$this->put('advogados/{id}', 'AdvogadoController@atualizar');
	$this->post('advogados', 'AdvogadoController@deletar');
		

	//rotas para teste de front end 

	//rotas de teste para front de finacas
	$this->get('financas', 'FrontController@indexFinancas');
	//$this->get('varaForo/mostrar', 'VaraForoController@mostrarVaraForo');
	//$this->get('varaForo/criar', 'VaraForoController@criarVaraForo');

	//rotas de teste para front de colaboradores
	$this->get('colaboradores', 'FrontController@indexColaborador');
	$this->get('colaboradores/mostrar', 'FrontController@mostrarColaborador');
	$this->get('colaboradores/novo', 'FrontController@novoColaborador');

	//rotas de teste para front de estagiarios
	$this->get('estagiarios', 'FrontController@indexEstagiario');
	$this->get('estagiarios/mostrar', 'FrontController@mostrarEstagiario');
	$this->get('estagiarios/novo', 'FrontController@novoEstagiario');

	//rotas de teste para front de tipos de processos
	$this->get('tiposProcessos', 'FrontController@indexTipoProcesso');
	$this->get('tiposProcessos/mostrar', 'FrontController@mostrarTipoProcesso');
	$this->get('tiposProcessos/novo', 'FrontController@novoTipoProcesso');

	//rotas de teste para front de tribunais
	$this->get('tribunais', 'FrontController@indexTribunal');
	$this->get('tribunais/mostrar', 'FrontController@mostrarTribunal');
	$this->get('tribunais/novo', 'FrontController@novoTribunal');

	//rotas de teste para front de comarcas	
	$this->get('comarcas', 'FrontController@indexComarca');
	$this->get('comarcas/mostrar', 'FrontController@mostrarComarca');
	$this->get('comarcas/novo', 'FrontController@novoComarca');

	//rotas de teste para front de instancias		
	$this->get('instancias', 'FrontController@indexInstancia');
	$this->get('instancias/mostrar', 'FrontController@mostrarInstancia');
	$this->get('instancias/novo', 'FrontController@novoInstancia');

	//rotas de teste para front de varas e foros		
	$this->get('varasForos', 'FrontController@indexVaraForo');
	$this->get('varasForos/mostrar', 'FrontController@mostrarVaraForo');
	$this->get('varasForos/novo', 'FrontController@novoVaraForo');

	//rotas de teste para front de processos		
	$this->get('processos', 'FrontController@indexProcesso');
	$this->get('processos/mostrar', 'FrontController@mostrarProcesso');
	$this->get('processos/novo', 'FrontController@novoProcesso');

	//rotas de teste para front de clientes		
	$this->get('clientes', 'FrontController@indexCliente');
	$this->get('clientes/mostrar', 'FrontController@mostrarCliente');
	$this->get('clientes/novo', 'FrontController@novoCliente');

	//rotas de teste para front de audiencias	
	$this->get('agendamentos', 'FrontController@indexAgendamento');
	$this->get('agendamentos/mostrar', 'FrontController@mostrarAgendamento');
	$this->get('agendamentos/novo', 'FrontController@novoAgendamento');

	//rotas de teste para front de backup		
	$this->get('backups', 'FrontController@indexBackup');


		





});


