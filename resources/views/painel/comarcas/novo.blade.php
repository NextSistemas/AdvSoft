@extends('adminlte::page')

@section('title', 'Cadastrar Comarcas')

@section('content_header')

@stop
@section('content')

<div class="box box-solid box-primary">
    <div class="box-header">
        <i id="icon" class="fa fa-houzz"></i>
        <h3 class="box-title">Comarcas</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-sm" data-widget="refresh" title="Atualizar informações">
                <i class="fa fa-refresh"></i>
            </button>
            <button class="btn btn-primary btn-sm" data-widget="collapse" title="Diminuir/Aumentar janela">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>

    <ol class="breadcrumb">
        <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/painel/comarcas">Comarcas</a></li>        
        <li class="active">novo</li>
    </ol>

    <!-- mensagem de erro -->
    @if ($errors->any())
    <div class="alert alert-danger">
     	<ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <!-- fim mensagem de erro -->

    <div class="box-body">
        <!-- nav-tabs-custom -->
        <div class="nav-tabs-custom">
            <!-- tabela de navegação -pills-stacked "nav-justified" -->
            <ul class="nav nav nav-justified">
                <li class="active"><a href="#dadosPessoais" data-toggle="tab"><i class="fa fa-address-card"></i> Dados</a></li>   
            </ul>

            <!-- formulario -->
            <form role="form" action="#" method="POST">
            {{ csrf_field() }}
                <!-- tabela de conteudo -->
                <div class="tab-content">

                    <!-- conteudo de dados-->                        
                    <div class="tab-pane fade in active" id="dadosPessoais">
                    <br>

                        <!-- Descrição -->
                        <div class="form-group col-md-12">
                            <label for="descricao"><span style="color:#ea1e1e">Descrição</span></label>
                            <input type="text" class="form-control input-sm" id="comarcaDescricao" 
                            name="descricao" placeholder="digite a descricao aqui..." required>
                        </div>  
                        <!-- fim Descrição -->

                   		<!-- fim conteudo de dados-->   

                    <div class="row" style="margin-left: 0">
                        <!-- botoes -->                    
                        <div class="form-group" style="margin-left: 15px">	
                            <button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
                            <a href="../comarcas" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
                        </div>
                        <!-- fim botoes -->
                    </div>
                    
                </div>
                <!-- fim tabela de conteudo -->
            </form>
            <!-- fim formulario -->
        </div>
        <!-- fim nav-tabs-custom -->        
    </div>
</div>


          
@stop
        