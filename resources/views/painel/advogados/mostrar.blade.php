@extends('adminlte::page')

@section('title', 'Lista de Advogados')

@section('content_header')

@stop

@section('content')

<!-- box-solid -->
<div class="box box-solid box-primary">
	<!-- box-header -->
	<div class="box-header">
        <i id="icon" class="fa fa-tags"></i>
        <h3 class="box-title">Informações</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-sm" data-widget="refresh" title="Atualizar informações">
                <i class="fa fa-refresh"></i>
            </button>
            <button class="btn btn-primary btn-sm" data-widget="collapse" title="Diminuir/Aumentar janela">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
	<!-- fim box-header -->

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">advogados</a></li>        
        <li class="active">mostrar</li>
    </ol>

    <!-- box-body -->
    <div class="box-body">
		<!-- box-header -->
		<div class="box-header pull-right">
			<a href="{{ url('painel/advogados') }}" class="btn btn-success btn-sm">
			<i class="fa fa-clipboard"></i> Voltar à lista</a>
		</div>
		<!-- fim box-header -->

        <div class="text-justify">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><strong>Código</strong></td>
                        <td>{{ $advogado->id }}</td>
                    </tr>

                    <tr>
                        <td><strong>Nome</strong></td>
                        <td>{{ $advogado->nome }}</td>
                    </tr>

                    <tr>
                        <td><strong>Situacao</strong></td>
                        <td>{{ $advogado->situacao }}</td>
                    </tr>

                    <tr>
                        <td><strong>OAB</strong></td>
                        <td>{{ $advogado->oab }}</td>
                    </tr>

                    <tr>
                        <td><strong>Celular</strong></td>
                        <td>{{ $advogado->celular }}</td>
                    </tr>

                    <tr>
                        <td><strong>Telefone</strong></td>
                        <td>{{ $advogado->telefone }}</td>
                    </tr>

                    <tr>
                        <td><strong>E-mail</strong></td>
                        <td>{{ $advogado->email }}</td>
                    </tr>

                    <tr>
                        <td><strong>CEP</strong></td>
                        <td>{{ $advogado->cep }}</td>
                    </tr>

                    <tr>
                        <td><strong>Endereço</strong></td>
                        <td>{{ $advogado->endereco }}</td>
                    </tr>

                    <tr>
                        <td><strong>Complemento</strong></td>
                        <td>{{ $advogado->complemento }}</td>
                    </tr>

                    <tr>
                        <td><strong>Número</strong></td>
                        <td>{{ $advogado->numero }}</td>
                    </tr>

                    <tr>
                        <td><strong>Bairro</strong></td>
                        <td>{{ $advogado->bairro }}</td>
                    </tr>

                    <tr>
                        <td><strong>Cidade</strong></td>
                        <td>{{ $advogado->cidade }}</td>
                    </tr>
                    <tr>
                        <td><strong>UF</strong></td>
                        <td>{{ $advogado->uf }}</td>
                    </tr>

                    <tr>
                        <td><strong>Descrição</strong></td>
                        <td>{{ $advogado->descricao }}</td>
                    </tr>

                    <tr>
                        <td><strong>Criado em</strong></td>
                        <td>{{ $advogado->created_at}}</td>
                    </tr>

                    <tr>
                        <td><strong>Atualizado em</strong></td>
                        <td>{{ $advogado->updated_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- fim box-body -->
</div>
<!-- fim box-solid -->

@stop
	