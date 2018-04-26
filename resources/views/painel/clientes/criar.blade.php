@extends('adminlte::page')

@section('title', 'Cadastrar Clientes')

@section('content_header')
    <h1 class="ion-person-add"> Adicionar novo Cliente</h1>
@stop

@section('content')
    
<ol class="breadcrumb">
    <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="/painel/clientes"><i class="ion-person-stalker"></i> Clientes</a></li>
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

<div class="box box-default">
	<div class="box-body">
		<div class="row">
	        <form role="form" action="{{ route('advogados.store') }}" method="POST">	        	
	        	{{ csrf_field() }}

				<h3 class="ion-clipboard" style="margin-left: 15px"> Dados Pessoais</h3>

	           		<div class="form-group col-md-4">
						<label for="situacao">Nome Completo</label>
						<input type="text" class="form-control input-sm" id="advogadoNome" name="nome" placeholder="digite o nome completo...">
					</div>

	                <div class="form-group col-md-4">
	                	<label for="nome">Nome da Mãe</label>
	                	<input type="text" class="form-control input-sm" id="advogadoNome" name="nome" placeholder="digite o nome da mãe...">
	                </div>

	                <div class="form-group col-md-2">
	                	<label for="oab">Registro Geral</label>
	                	<input type="text" class="form-control input-sm" id="estagiarioOab"  name="oab" placeholder="digite o RG...">
	                </div>
					<div class="form-group col-md-2">
	                	<label for="oab">Orgão Emissor</label>
	                	<input type="text" class="form-control input-sm" id="estagiarioOab"  name="oab" placeholder="digite o emissor do RG...">
	                </div>

	                <div class="form-group col-md-3">
	                	<label for="celular">CPF</label>
	                	<input type="text" class="form-control input-sm" id="estagiarioCelular" name="celular" placeholder="digite seu celular...">
	                </div>

	                <div class="form-group col-md-3">
	                	<label for="telefone">Data de Nascimento</label>
	                	<input type="text" class="form-control input-sm" id="estagiarioTelefone" name="telefone" placeholder="digite a data de nascimento...">
	                </div>

	                <div class="form-group col-md-6">
	                	<label for="email">E-mail</label>
	                	<input type="email" class="form-control input-sm" id="estagiarioEmail" name="email" placeholder="digite seu e-mail...">
	                </div>

					<div class="form-group col-md-4">
						<label for="situacao">Apelido</label>
						<input type="text" class="form-control input-sm" id="advogadoNome" name="nome" placeholder="digite um apelido...">
					</div>

	                <div class="form-group col-md-4">
	                	<label for="nome">Telefone Celular</label>
	                	<input type="text" class="form-control input-sm" id="advogadoNome" name="nome" placeholder="digite um número do celular...">
	                </div>

	                <div class="form-group col-md-4">
	                	<label for="oab">Telefone Residencial</label>
	                	<input type="text" class="form-control input-sm" id="estagiarioOab"  name="oab" placeholder="digite um número fixo...">
	                </div>

			</form>
        </div>
	</div>	
</div>

<div class="box box-default">
	<div class="box-body">
		<div class="row">
	        <form role="form" action="{{ route('advogados.store') }}" method="POST">	        	
	        	{{ csrf_field() }}

                <h3 class="ion-map" style="margin-left: 15px"> Endereço</h3>
                
	                <div class="form-group col-md-2">
	                	<label for="cep">CEP</label>
	                	<input type="text" class="form-control input-sm" id="advogadoCep" name="cep" placeholder="digite seu cep...">
	                </div>

	                <div class="form-group col-md-7">
	                	<label for="endereco">Rua</label>
	                	<input type="text" class="form-control input-sm" id="advogadoRua" name="endereco" placeholder="digite sua rua...">
	                </div>

	                <div class="form-group col-md-3">
	                	<label for="complemento">Complemento</label>
	                	<input type="text" class="form-control input-sm" id="advogadoComplemento" name="complemento" placeholder="digite seu complemento...">
	                </div>

	                <div class="form-group col-md-2">
	                	<label for="numero">Número</label>
	                	<input type="text" class="form-control input-sm" id="advogadoNumero" name="numero" placeholder="digite o nº da sua residência...">
	                </div>

	                <div class="form-group col-md-4">
	                	<label for="bairro">Bairro</label>
	                	<input type="text" class="form-control input-sm" id="advogadoBairro" name="bairro" placeholder="digite seu bairro...">
	                </div>

	                <div class="form-group col-md-4">
	                	<label for="cidade">Cidade</label>
	                	<input type="text" class="form-control input-sm" id="advogadoCidade" name="cidade" placeholder="digite sua cidade...">
	                </div>

	                <div class="form-group col-md-2">
						<label for="uf">Estado(UF)</label>
							<select class="form-control input-sm" id="advogadoUf" name="uf">
							<option>Selecione</option>
						    <option>AC</option>
						    <option>AL</option>
						    <option>AP</option>
						    <option>AM</option>
							<option>BA</option>
						    <option>CE</option>
						    <option>DF</option>
						    <option>ES</option>
							<option>GO</option>
						    <option>MA</option>
						    <option>MT</option>
						    <option>MS</option>
							<option>MG</option>
						    <option>PA</option>
						    <option>PB</option>
						    <option>PR</option>
							<option>PE</option>
						    <option>PI</option>
						    <option>RJ</option>
						    <option>RN</option>
							<option>RS</option>
						    <option>RO</option>
						    <option>RR</option>
						    <option>SC</option>
							<option>SP</option>
						    <option>SE</option>
						    <option>TO</option>
						</select>
					</div>

					<div class="form-group col-md-12">
	                	<label for="descricao">Observações</label>
	                	<textarea type="email" class="form-control input-sm" id="advogadoDescricao" name="descricao" placeholder="descreva uma observação..."></textarea>
	                </div>
     			 <div class="form-group" style="margin-left: 15px">	
     				<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Cliente</button>
 					<a href="../clientes" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à lista de Clientes</a>
			</form>
        </div>
	</div>	
</div>

@stop