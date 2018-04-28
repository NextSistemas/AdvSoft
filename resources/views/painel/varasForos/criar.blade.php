@extends('adminlte::page')

@section('title', 'Cadastrar Vara/Foro')

@section('content_header')
    <h1 class="ion-person-add"> Adicionar novo Vara/Foro</h1>
@stop

@section('content')
    
		<ol class="breadcrumb">
			<li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Varas/Foros</li>
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

	            <div class="form-group col-md-4">
	            	<label for="descricao">Descrição *</label>
	            	<input type="text" class="form-control input-sm" id="instanciaDescricao" 
					name="nome" placeholder="digite o nome da vara ou foro...">
	    		</div>

				<div class="form-group col-md-4">
					<label for="regiao">Região</label>
					<input type="text" class="form-control input-sm" id="instanciaRegiao" 
					name="regiao" placeholder="digite a região...">
				</div>

				<div class="form-group col-md-4">
					<label for="Endereco">Endereço</label>
					<input type="text" class="form-control input-sm" id="instanciaEndereco" 
					name="telefone" placeholder="digite seu endereço...">
				</div>
				
				<div  class="form-group" style="margin-left: 15px">	
					<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
					<a href="../varasForos" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
				</div>
			</div>
		</div>	
	</div>
</form>
@stop
