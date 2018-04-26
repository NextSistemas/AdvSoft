@extends('adminlte::page')

@section('title', 'Lista de Advogados')

@section('content_header')
    <h1 class="ion-ios-pricetags"> Lista de Advogados</h1>
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

<!-- Tabela de lista de todos os advogados cadastrados -->
<div class="box box-primary">
	<div class="box-header">
		<a href="advogados/create" class="btn btn-success btn-sm"><i class="ion-person-add"></i> Adcionar Novo</a>

		<div class="input-group input-group-sm pull-right" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

            <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
	</div>

	<div class="box-body">

		<div class="row">
	        <div class="col-xs-12">
			<div class="table-responsive">
            <table class="table table-striped table-sm">
		                <tbody>
		                	<tr>
				                <th class="ion-connection-bars"> Situação</th>
				                <th class="ion-person-stalker"> Nome</th>
				                <th class="ion-android-phone-portrait"> Celular</th>
				                <th class="ion-email-unread"> Email</th>
				                <th class="ion-ios-gear"> Ações</th>
		                	</tr>
		                	@foreach($advogados as $advogado)
		                	<tr>
				                <td>
				                	@if ($advogado->situacao == 'Ativo')
				                		<span class="label label-primary">{{ $advogado -> situacao }}</span>
				                	@else
				                		<span class="label label-default">{{ $advogado -> situacao }}</span>
				                	@endif
				                </td>
				                <td><a href="advogados/{{ $advogado->id }}">{{ $advogado -> nome }}</a></td>
				                <td>{{ $advogado -> celular }}</td>
				                <td>{{ $advogado -> email }}</td>
				                <td>
				                	<div class="btn-group pull-left" role="group" aria-label="Basic example">
                                		<a href="{{ URL::to('advogados/'.$advogado->id.'/edit') }}">
                                    		<button type="button" class="btn btn-warning btn-xs"><i class="ion-edit"></i> Editar</button>
                                		</a>&nbsp;
                                	</div>
                                	<form action="{{ url('advogados', [$advogado->id]) }}" method="POST">
                                    	<input type="hidden" name="_method" value="DELETE">
                                    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-xs"> <i class="ion-trash-a"></i> Excluir </button>
                                </form>
                            
				                </td>
		                	</tr>
		                	@endforeach
		             	</tbody>
					  </table>


	          		<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
	            </div>
	        </div>
      	</div>
	</div>
	
</div>
@stop