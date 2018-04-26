@extends('adminlte::page')

@section('title', 'Cadastrar Processo')

@section('content_header')
    <h1 class="ion-person-add"> Adicionar Novo Processo</h1>
@stop

@section('content')
    
<ol class="breadcrumb">
    <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Processos</li>
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
			
				<h3 class="ion-clipboard" style="margin-left: 15px"> Dados</h3>

				<div class="form-group col-md-6">
					<label for="situacao">Cliente</label>
					<input type="text" class="form-control input-sm" id="advogadoNome" name="nome" placeholder="digite o nome do cliente...">
				</div>

				<div class="form-group col-md-4">
					<label for="acordo">Tipo de Acordo</label>
					<select class="form-control input-sm" id="advogadoAcordo" name="acordo">
					<option>Selecione</option>
					<option>Requerente</option>
					<option>Requerido</option>
					</select>
				</div>

				<div class="form-group col-md-2">
					<label for="uf">Status</label>
					<select class="form-control input-sm" id="advogadoUf" name="uf">
					<option>Selecione</option>
					<option>Ativo</option>
					<option>Inativo</option>
					</select>
				</div>

				<div class="form-group col-md-3">
					<label for="cep">Tipo de Processo</label>
					<input type="text" class="form-control input-sm" id="advogadoCep" 
					name="cep" placeholder="digite seu cep...">
				</div>

				<div class="form-group col-md-3">
					<label for="endereco">Tribunal</label>
				    <input type="text" class="form-control input-sm" id="advogadoRua" 
					name="endereco" placeholder="digite sua rua...">
				</div>

				<div class="form-group col-md-3">
					<label for="endereco">Comarca</label>
					<input type="text" class="form-control input-sm" id="advogadoRua" 
					name="endereco" placeholder="digite sua rua...">
				</div>

				<div class="form-group col-md-3">
					<label for="endereco">Vara/Foro</label>
					<input type="text" class="form-control input-sm" id="advogadoRua" 
					name="endereco" placeholder="digite sua rua...">
				</div> 

				<div class="form-group" style="margin-left: 15px">	
					<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
 					<a href="../processos" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
				</div>		
			</div>	
		</div>
	</div>
</form>
@stop