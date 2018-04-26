@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1><span class="ion-ios-pricetags"> Lista de Clientes</span></h1>
@stop

@section('content')
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Clientes</li>
</ol>

		@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

<div class="box box-primary">
	<div class="box-header">
		<a href="../clientes" class="btn btn-success btn-sm"> <span class="ion-clipboard"> Lista de Clientes</span></a>
	</div>

	<div class="box-body">
        <div class="text-justify">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td><strong>Código</strong></td>
                        <td>1</td>
                    </tr>

                    <tr>
                        <td><strong>Situacao</strong></td>
                        <td>Cleiton Silveira</td>
                    </tr>

                    <tr>
                        <td><strong>OAB</strong></td>
                        <td>8888888</td>
                    </tr>

                    <tr>
                        <td><strong>Celular</strong></td>
                        <td>9898898998</td>
                    </tr>

                    <tr>
                        <td><strong>Telefone</strong></td>
                        <td>98897</td>
                    </tr>

                    <tr>
                        <td><strong>E-mail</strong></td>
                        <td>@teste</td>
                    </tr>

                    <tr>
                        <td><strong>CEP</strong></td>
                        <td>98789</td>
                    </tr>

                    <tr>
                        <td><strong>Endereço</strong></td>
                        <td>teste</td>
                    </tr>

                    <tr>
                        <td><strong>Complemento</strong></td>
                        <td>casa</td>
                    </tr>

                    <tr>
                        <td><strong>Número</strong></td>
                        <td>129</td>
                    </tr>

                    <tr>
                        <td><strong>Bairro</strong></td>
                        <td>jhgadh</td>
                    </tr>

                    <tr>
                        <td><strong>Cidade</strong></td>
                        <td>jhsdfgds</td>
                    </tr>
                    <tr>
                        <td><strong>UF</strong></td>
                        <td>PA</td>
                    </tr>

                    <tr>
                        <td><strong>Descrição</strong></td>
                        <td>gyghjd</td>
                    </tr>

                    <tr>
                        <td><strong>Criado em</strong></td>
                        <td>23/09/18 23:00</td>
                    </tr>

                    <tr>
                        <td><strong>Atualizado em</strong></td>
                        <td>23/09/18 23:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop