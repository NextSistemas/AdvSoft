@extends('adminlte::page')

@section('title', 'Lista de Advogados')

@section('content_header')

@stop

@section('content')

<!-- mensagem de sucesso -->
@if (session('success'))
	<div class="alert alert-adminLTE alert-success">
	<i class="fa fa-check"></i>
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ session('success') }}
	</div>
@endif
<!-- fim mensagem de sucesso -->

<!-- box-solid -->
<div class="box box-solid box-primary">
	<!-- box-header -->
	<div class="box-header">
        <i id="icon" class="fa fa-tags"></i>
        <h3 class="box-title">Lista de Advogados</h3>
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
		<li class="active">Advogados</li>
	</ol>

	<!-- box-body -->
	<div class="box-body">
		<!-- box-header -->
		<div class="box-header">
			<a href="advogados/novo" class="btn btn-success btn-sm">
			<i class="ion-person-add"></i> Adcionar Novo</a>

			<div class="input-group input-group-sm pull-right" style="width: 150px;">
				<input type="text" name="table_search" class="form-control pull-right" 
				placeholder="Pesquisar">

				<div class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
		</div>
		<!-- fim box-header -->

		<!-- box-body da tabela -->
		<div class="box-body">
			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-sm">
							<tbody>
								<tr>
									<th class="#"> Código</th>
									<th class="ion-connection-bars"> Situação</th>
									<th class="ion-person-stalker"> Nome</th>
									<th class="ion-android-phone-portrait"> Celular</th>
									<th class="ion-ios-gear"> Ações</th>
								</tr>
								@foreach($advogados as $advogado)
								<tr>
									<td>{{ $advogado -> id }}</td>
									<!-- <td>
										@if ($advogado->situacao == 'Ativo')
											<span class="label label-primary">{{ $advogado -> situacao }}</span>
										@else
											<span class="label label-default">{{ $advogado -> situacao }}</span>
										@endif
									</td> -->
									<td><a href="advogados/{{ $advogado->id }}">{{ $advogado -> nome }}</a></td>
									<td>{{ $advogado -> celular }}</td>
									<td>
										<div class="btn-group pull-left" role="group" aria-label="Basic example">
											<a href="{{ URL::to('painel/advogados/'.$advogado->id.'/editar') }}">
												<button type="button" class="btn btn-warning btn-xs"><i class="ion-edit"></i> Editar</button>
											</a>&nbsp;
										</div>
										<form action="{{ url('painel/advogados', [$advogado->id]) }}" method="POST">
											<input type="hidden" name="_method" value="DELETE">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button type="submit" class="btn btn-danger btn-xs"> <i class="ion-trash-a"></i> Excluir </button>
										</form>
									</td>
								</tr>
								@endforeach
				 			</tbody>
			  			</table>
					</div>
				</div>
  			</div>
		</div>
		<!-- fim box-body da tabela -->
	</div>
	<!-- fim box-body -->		
</div>
<!-- fim box-solid -->

@stop