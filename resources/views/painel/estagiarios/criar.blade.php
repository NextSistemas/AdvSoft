@extends('adminlte::page')

@section('title', 'Cadastrar Advogado')

@section('content_header')
    <h1 class="ion-person-add"> Adicionar novo Estagiario</h1>
@stop

@section('content')
    
<ol class="breadcrumb">
    <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Estagiarios</li>
</ol>

@if ($errors->any())
    <div class="alert alert-danger">
     	<ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<form role="form" action="#" method="POST">	      
	{{ csrf_field() }}	  	
	<div class="box box-default">
		<div class="box-body">
			<div class="row">

				<h3 class="ion-clipboard" style="margin-left: 15px"> Dados Pessoais</h3>

				<div class="form-group col-md-3">
					<label for="situacao">Situação</label>
						<select class="form-control input-sm" id="advogadoSituacao" name="situacao">
						<option>Escola uma opção...</option>
						<option>Ativo</option>
						<option>Inativo</option>
					</select>
				</div>

				<div class="form-group col-md-6">
					<label for="nome">Nome completo</label>
					<input type="text" class="form-control input-sm" id="advogadoNome"
					name="nome" placeholder="digite seu nome...">
				</div>

				<div class="form-group col-md-3">
					<label for="oab">OAB</label>
					<input type="text" class="form-control input-sm" id="advogadoOab"  
					name="oab" placeholder="digite sua oab...">
				</div>
					
			</div>
		</div>	
	</div>

	<div class="box box-default">				
		<div class="box-body">
			<div class="row">
					
				<h3 class="ion-clipboard" style="margin-left: 15px"> Meios de Contato</h3>

				<div class="form-group col-md-4">
					<label for="celular">Celular</label>
					<input type="text" class="form-control input-sm" id="advogadoCelular" 
					name="celular" placeholder="digite seu celular...">
				</div>

				<div class="form-group col-md-4">
					<label for="telefone">Telefone</label>
					<input type="text" class="form-control input-sm" id="advogadoTelefone" 
					name="telefone" placeholder="digite seu telefone...">
				</div>

				<div class="form-group col-md-4">
					<label for="email">E-mail</label>
					<input type="email" class="form-control input-sm" id="advogadoEmail" 
					name="email" placeholder="digite seu e-mail...">
				</div>	
			</div>
		</div>	
	</div>

	<div class="box box-default">
		<div class="box-body">
			<div class="row">

				<h3 class="ion-clipboard" style="margin-left: 15px"> Endereco</h3>
					
				<div class="form-group col-md-2">
					<label for="cep">CEP</label>
					<input type="text" class="form-control input-sm" id="advogadoCep" 
					name="cep" placeholder="digite seu cep...">
				</div>

				<div class="form-group col-md-7">
					<label for="endereco">Rua</label>
					<input type="text" class="form-control input-sm" id="advogadoRua" 
					name="endereco" placeholder="digite sua rua...">
				</div>

				<div class="form-group col-md-3">
					<label for="complemento">Complemento</label>
					<input type="text" class="form-control input-sm" id="advogadoComplemento" 
					name="complemento" placeholder="digite seu complemento...">
				</div>

				<div class="form-group col-md-2">
					<label for="numero">Número</label>
					<input type="text" class="form-control input-sm" id="advogadoNumero" 
					name="numero" placeholder="digite o nº da sua residência...">
				</div>

				<div class="form-group col-md-4">
					<label for="bairro">Bairro</label>
					<input type="text" class="form-control input-sm" id="advogadoBairro" 
					name="bairro" placeholder="digite seu bairro...">
				</div>

				<div class="form-group col-md-4">
					<label for="cidade">Cidade</label>
					<input type="text" class="form-control input-sm" id="advogadoCidade" 
					name="cidade" placeholder="digite sua cidade...">
				</div>

				<div class="form-group col-md-2">
					<label for="uf">Estado(UF)</label>
						<select class="form-control input-sm" id="advogadoUf" name="uf">
						<option>Selecione</option>
						<option>PA</option>
						<option>AM</option>
						<option>RJ</option>
						<option>MS</option>
					</select>
				</div>

				<div class="form-group col-md-12">
					<label for="descricao">Descrições adicionais</label>
					<textarea type="email" class="form-control input-sm" id="advogadoDescricao" 
					name="descricao" placeholder="digite sua descricão..."></textarea>
				</div>

				<div class="form-group" style="margin-left: 15px">	
					<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
					<a href="../advogados" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
				</div>
			</div>
		</div>	
	</div>
</form>
@stop