@extends('adminlte::page')

@section('title', 'Cadastrar Advogado')

@section('content_header')

@stop
@section('content')

<div class="box box-solid box-primary">
    <div class="box-header">
        <i id="icon" class="fa fa-balance-scale"></i>
        <h3 class="box-title">Advogados</h3>
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
        <li><a href="/painel/advogados">Advogados</a></li>        
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
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#dadosPessoais" data-toggle="tab"><i class="fa fa-address-card"></i> Dados Pessoais</a></li>   
                <li><a href="#contato" data-toggle="tab"><i class="fa fa-fax"></i> Meios de Contato</a></li>
                <li><a href="#endereco" data-toggle="tab"><i class="fa fa-map-marker"></i> Endereço</a></li>
                <li><a href="#add" data-toggle="tab"><i class="fa fa-tags"></i> Adicionais</a></li>                
            </ul>

            <!-- formulario -->
            <form action="{{ route('advogados.store') }}" method="POST">
            {{ csrf_field() }}
                <!-- tabela de conteudo -->
                <div class="tab-content">
                    <!-- conteudo de dados pessoais -->                        
                    <div class="tab-pane fade in active" id="dadosPessoais">
                    <br>

                        <!-- nome completo -->
                        <div class="form-group col-md-9">
                            <label for="nome"><span style="color:#ea1e1e">Nome Completo</span></label>
                            <input type="text" class="form-control input-sm" 
                            name="nome" placeholder="digite seu nome..." value="{{ old('nome')}}">
                        </div>  
                        <!-- fim nome completo -->

                        <!-- OAB -->
                        <div class="form-group col-md-3">
                            <label for="oab"><span style="color:#ea1e1e">OAB</span></label>
                            <input type="text" class="form-control input-sm"  
                            name="oab" placeholder="digite sua oab..." value="{{ old('oab')}}">
                        </div>
                        <!-- fim OAB -->                                                                                                    
                    </div>
                    <!-- fim conteudo de dados pessoais -->   

                    <!-- conteudo de meios de contato -->                        
                    <div class="tab-pane fade" id="contato">
                    <br>

                        <!-- celular -->
                        <div class="form-group col-md-4">
                            <label for="celular"><span style="color:#ea1e1e">Celular</span></label>
                            <input type="text" class="form-control input-sm" 
                            name="celular" placeholder="digite seu celular..." value="{{ old('celular')}}">
                        </div>
                        <!-- fim celular -->

                        <!-- telefone -->
                        <div class="form-group col-md-4">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control input-sm" id="advogadoTelefone" 
                            name="telefone" placeholder="digite seu telefone..." value="{{ old('telefone')}}">
                        </div>
                        <!-- fim telefone -->  

                        <!-- email -->
                        <div class="form-group col-md-4">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control input-sm" id="advogadoEmail" 
                            name="email" placeholder="digite seu e-mail..." value="{{ old('email')}}">
                        </div>
                        <!-- fim email -->	                    
                    </div>
                    <!-- fim conteudo de meios de contato -->

                    <!-- conteudo de endereço | usando API ViaCep | OBS: não alterar nenhuma tag dessa api-->                        
                    <div class="tab-pane fade" id="endereco">
                    <br>
                    <!-- form para consumir a API -->
                    <form action="." method="get">
                        <!-- cep -->
                        <div class="form-group col-md-2">
                            <label><span style="color:#ea1e1e">CEP</span></label>
                            <input type="text" class="form-control input-sm" id="cep" size="10" maxlength="9"
                            name="cep" placeholder="informe um CEP válido" value="{{ old('cep')}}">
                        </div>
                        <!-- fim cep -->

                        <!-- endereco -->
                        <div class="form-group col-md-8">
                            <label><span style="color:#ea1e1e">Rua</span></label>
                            <input type="text" class="form-control input-sm" id="rua"
                            name="rua" placeholder="digite seu endereço..." value="{{ old('rua')}}">
                        </div>
                        <!-- fim endereço -->

                        <!-- numero da residencia -->
                        <div class="form-group col-md-2">
                            <label>Número</label>
                            <input type="text" class="form-control input-sm" id="numero" size="60"
                            name="numero" placeholder="digite o nº da sua residência..." value="{{ old('numero')}}">
                        </div>
                        <!-- fim numero da residencia -->

                        <!-- complemento -->
                        <div class="form-group col-md-3">
                            <label>Complemento</label>
                            <input type="text" class="form-control input-sm" id="complemento"
                            name="complemento" placeholder="digite seu complemento..." value="{{ old('complemento')}}">
                        </div>
                        <!-- fim complemento -->

                        <!-- bairro -->
                        <div class="form-group col-md-4">
                            <label>Bairro</label>
                            <input type="text" class="form-control input-sm" id="bairro" size="40"
                            name="bairro" placeholder="digite seu bairro..." value="{{ old('bairro')}}">
                        </div>
                        <!-- fim bairro -->

                        <!-- cidade -->
                        <div class="form-group col-md-4">
                            <label><span style="color:#ea1e1e">Cidade</span></label>
                            <input type="text" class="form-control input-sm" id="cidade" size="40"
                            name="cidade" placeholder="digite sua cidade..." value="{{ old('cidade')}}">
                        </div>
                        <!-- fim cidade -->

                        <!-- uf -->
                        <div class="form-group col-md-1">
                            <label><span style="color:#ea1e1e">UF</span></label>
                            <input type="text" class="form-control input-sm" id="uf" size="2"
                            name="uf" placeholder="digite sua cidade..." value="{{ old('uf')}}">
                        </div>
                        <!-- fim uf -->  
                    </form>
                    <!-- form para consumir a API -->                  
                    </div>
                    <!-- fim conteudo de endereço -->

                    <!-- conteudo de descrição -->                        
                    <div class="tab-pane fade" id="add">
                    <br>

                        <!-- descrição -->
                        <div class="form-group col-md-12">
                            <label for="descricao">Descrições adicionais</label>
                            <textarea type="text" class="form-control input-sm" 
                            name="descricao" placeholder="digite sua descricão...">{{ old('descricao')}}</textarea>
                        </div>
                        <!-- fim descrição -->
                    </div>
                    <!-- fim conteudo de descrição -->

                    <div class="row" style="margin-left: 0">
                        <!-- botoes -->                    
                        <div class="form-group" style="margin-left: 15px">	
                            <button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
                            <a href="{{ route('advogados.index') }}" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
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
        