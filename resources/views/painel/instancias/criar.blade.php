@extends('adminlte::page')

@section('title', 'Cadastrar Instância')

@section('content_header')
    <h1 class="ion-person-add"> Adicionar nova Instância</h1>
@stop

@section('content')
    
<ol class="breadcrumb">
    <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Instâncias</li>
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
	            	<label for="nome">Descrição *</label>
	            	<input type="text" class="form-control input-sm" id="instanciaDescricao" 
					name="nome" placeholder="digite seu nome...">
	    		</div>

				<div class="form-group col-md-4">
					<label for="telefone">Endereço</label>
					<input type="text" class="form-control input-sm" id="instanciaEndereco" 
					name="telefone" placeholder="digite seu telefone...">
				</div>
					
				<div class="form-group col-md-4">
					<label for="telefone">Telefone</label>
					<input type="text" class="form-control input-sm" id="instanciaTelefone" 
					name="telefone" placeholder="digite seu telefone...">
				</div>

				<div  class="form-group" style="margin-left: 15px">	
					<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
					<a href="../instancias" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
				</div>
			</div>
		</div>	
	</div>
</form>
@stop
