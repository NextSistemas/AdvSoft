<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

$this->group(['middleware' => ['auth'], 'namespace' => 'Painel', 'prefix' => 'painel'], function (){

	$this->get('/', 'PainelController@index')->name('painel');

	$this->resource('advogados', 'AdvogadoController');

	//rotas para teste de front end 

	//rotas de teste para front de finacas
	$this->get('financas', 'FrontController@indexFinancas');
	//$this->get('varaForo/mostrar', 'VaraForoController@mostrarVaraForo');
	//$this->get('varaForo/criar', 'VaraForoController@criarVaraForo');

	//rotas de teste para front de colaboradores
	$this->get('colaboradores', 'FrontController@indexColaborador');
	$this->get('colaboradores/mostrar', 'FrontController@mostrarColaborador');
	$this->get('colaboradores/criar', 'FrontController@criarColaborador');

	//rotas de teste para front de estagiarios
	$this->get('estagiarios', 'FrontController@indexEstagiario');
	$this->get('estagiarios/mostrar', 'FrontController@mostrarEstagiario');
	$this->get('estagiarios/criar', 'FrontController@criarEstagiario');

	//rotas de teste para front de tipos de processos
	$this->get('tiposProcessos', 'FrontController@indexTipoProcesso');
	$this->get('tiposProcessos/mostrar', 'FrontController@mostrarTipoProcesso');
	$this->get('tiposProcessos/criar', 'FrontController@criarTipoProcesso');

	//rotas de teste para front de tribunais
	$this->get('tribunais', 'FrontController@indexTribunal');
	$this->get('tribunais/mostrar', 'FrontController@mostrarTribunal');
	$this->get('tribunais/criar', 'FrontController@criarTribunal');

	//rotas de teste para front de comarcas	
	$this->get('comarcas', 'FrontController@indexComarca');
	$this->get('comarcas/mostrar', 'FrontController@mostrarComarca');
	$this->get('comarcas/criar', 'FrontController@criarComarca');

	//rotas de teste para front de instancias		
	$this->get('instancias', 'FrontController@indexInstancia');
	$this->get('instancias/mostrar', 'FrontController@mostrarInstancia');
	$this->get('instancias/criar', 'FrontController@criarInstancia');

	//rotas de teste para front de varas e foros		
	$this->get('varasForos', 'FrontController@indexVaraForo');
	$this->get('varasForos/mostrar', 'FrontController@mostrarVaraForo');
	$this->get('varasForos/criar', 'FrontController@criarVaraForo');

	//rotas de teste para front de processos		
	$this->get('processos', 'FrontController@indexProcesso');
	$this->get('processos/mostrar', 'FrontController@mostrarProcesso');
	$this->get('processos/criar', 'FrontController@criarProcesso');

	//rotas de teste para front de clientes		
	$this->get('clientes', 'FrontController@indexCliente');
	$this->get('clientes/mostrar', 'FrontController@mostrarCliente');
	$this->get('clientes/criar', 'FrontController@criarCliente');

	//rotas de teste para front de audiencias	
	$this->get('audiencias', 'FrontController@indexAudiencia');
	$this->get('audiencias/mostrar', 'FrontController@mostrarAudiencia');
	$this->get('audiencias/criar', 'FrontController@criarAudiencia');

	//rotas de teste para front de backup		
	$this->get('backups', 'FrontController@indexBackup');


		





});


