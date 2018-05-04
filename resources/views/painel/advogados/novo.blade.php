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
            <form role="form" action="{{ url('painel/advogados') }}" method="POST">
            {{ csrf_field() }}
                <!-- tabela de conteudo -->
                <div class="tab-content">
                    <!-- conteudo de dados pessoais -->                        
                    <div class="tab-pane fade in active" id="dadosPessoais">
                    <br>

                        <!-- nome completo -->
                        <div class="form-group col-md-9">
                            <label for="nome"><span style="color:#ea1e1e">Nome Completo</span></label>
                            <input type="text" class="form-control input-sm" id="advogadoNome" 
                            name="nome" placeholder="digite seu nome..." required>
                        </div>  
                        <!-- fim nome completo -->

                        <!-- OAB -->
                        <div class="form-group col-md-3">
                            <label for="oab"><span style="color:#ea1e1e">OAB</span></label>
                            <input type="text" class="form-control input-sm" id="advogadoOab"  
                            name="oab" placeholder="digite sua oab..." required>
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
                            <input type="text" class="form-control input-sm" id="advogadoCelular" 
                            name="celular" placeholder="digite seu celular..." required>
                        </div>
                        <!-- fim celular -->

                        <!-- telefone -->
                        <div class="form-group col-md-4">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control input-sm" id="advogadoTelefone" 
                            name="telefone" placeholder="digite seu telefone...">
                        </div>
                        <!-- fim telefone -->  

                        <!-- email -->
                        <div class="form-group col-md-4">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control input-sm" id="advogadoEmail" 
                            name="email" placeholder="digite seu e-mail...">
                        </div>
                        <!-- fim email -->	                    
                    </div>
                    <!-- fim conteudo de meios de contato -->

                    <!-- conteudo de endereço -->                        
                    <div class="tab-pane fade" id="endereco">
                    <br>

                        <!-- cep -->
                        <div class="form-group col-md-2">
                            <label for="cep"><span style="color:#ea1e1e">CEP</span></label>
                            <input type="text" class="form-control input-sm" id="advogadoCep" 
                            name="cep" placeholder="digite seu cep..." required>
                        </div>
                        <!-- fim cep -->

                        <!-- endereco -->
                        <div class="form-group col-md-7">
                            <label for="endereco"><span style="color:#ea1e1e">Endereço</span></label>
                            <input type="text" class="form-control input-sm" id="advogadoRua" 
                            name="endereco" placeholder="digite seu endereço..." required>
                        </div>
                        <!-- fim endereço -->

                        <!-- complemento -->
                        <div class="form-group col-md-3">
                            <label for="complemento"><span style="color:#ea1e1e">Complemento</span></label>
                            <input type="text" class="form-control input-sm" id="advogadoComplemento" 
                            name="complemento" placeholder="digite seu complemento..." required>
                        </div>
                        <!-- fim complemento -->

                        <!-- numero da residencia -->
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control input-sm" id="advogadoNumero" 
                            name="numero" placeholder="digite o nº da sua residência...">
                        </div>
                        <!-- fim numero da residencia -->

                        <!-- bairro -->
                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control input-sm" id="advogadoBairro" 
                            name="bairro" placeholder="digite seu bairro...">
                        </div>
                        <!-- fim bairro -->

                        <!-- cidade -->
                        <div class="form-group col-md-4">
                            <label for="cidade"><span style="color:#ea1e1e">Cidade</span></label>
                            <input type="text" class="form-control input-sm" id="advogadoCidade" 
                            name="cidade" placeholder="digite sua cidade..." required>
                        </div>
                        <!-- fim cidade -->

                        <!-- uf do estado -->
                        <div class="form-group col-md-2">
                            <label for="uf"><span style="color:#ea1e1e">Estado(UF)</span></label>
                                <select class="form-control input-sm" id="advogadoUf" name="uf" required>
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
                        <!-- fim uf do estado -->                    
                    </div>
                    <!-- fim conteudo de endereço -->

                    <!-- conteudo de descrição -->                        
                    <div class="tab-pane fade" id="add">
                    <br>

                        <!-- descrição -->
                        <div class="form-group col-md-12">
                            <label for="descricao">Descrições adicionais</label>
                            <textarea type="text" class="form-control input-sm" id="advogadoDescricao" 
                            name="descricao" placeholder="digite sua descricão..."></textarea>
                        </div>
                        <!-- fim descrição -->
                    </div>
                    <!-- fim conteudo de descrição -->

                    <div class="row" style="margin-left: 0">
                        <!-- botoes -->                    
                        <div class="form-group" style="margin-left: 15px">	
                            <button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
                            <a href="../advogados" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
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
        