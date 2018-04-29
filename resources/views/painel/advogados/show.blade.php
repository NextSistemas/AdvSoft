@extends('adminlte::page')

@section('title', 'Advogado')

@section('content_header')
    <h1>Advogado(a) {{ $advogado->nome }}</h1>
@stop

@section('content')
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Advogados</li>
</ol>

		@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<div class="box box-primary">
	<div class="box-header">
		<a href="{{ route('advogados.index') }}" class="btn btn-success btn-sm"> <span class="ion-clipboard"> Lista de Advogados</span></a>
	</div>

	<div class="box-body">
        <div class="text-justify">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><strong>Código</strong></td>
                        <td>{{ $advogado->id }}</td>
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
                        <td>{{ $advogado->created_at->format('d-m-Y - H:i:s') }}</td>
                    </tr>

                    <tr>
                        <td><strong>Atualizado em</strong></td>
                        <td>{{ $advogado->updated_at->format('d-m-Y - H:i:s') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop