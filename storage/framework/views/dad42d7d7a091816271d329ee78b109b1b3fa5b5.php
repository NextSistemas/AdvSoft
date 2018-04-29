<?php $__env->startSection('title', 'Cadastrar Colaborador'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="ion-person-add"> Adicionar novo Colaborador</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
<ol class="breadcrumb">
    <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Colaboradores</li>
</ol>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
     	<ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form role="form" action="#" method="POST">	      
	<?php echo e(csrf_field()); ?>	  	
	<div class="box box-default">
		<div class="box-body">
			<div class="row">

				<h3 class="ion-clipboard" style="margin-left: 15px"> Dados Pessoais</h3>

				<div class="form-group col-md-3">
					<label for="situacao">Situação *</label>
						<select class="form-control input-sm" id="colaboradorSituacao" name="situacao">
						<option>Escola uma opção...</option>
						<option>Ativo</option>
						<option>Inativo</option>
					</select>
				</div>

				<div class="form-group col-md-6">
					<label for="nome">Nome completo *</label>
					<input type="text" class="form-control input-sm" id="colaboradorNome"
					name="nome" placeholder="digite seu nome...">
				</div>

				<div class="form-group col-md-3">
					<label for="oab">Data de Nascimento *</label>
					<input type="text" class="form-control input-sm" id="colaboradorDN"  
					name="oab" placeholder="digite sua Data de Nascimento...">
				</div>
					
			</div>
		</div>	
	</div>

	<div class="box box-default">				
		<div class="box-body">
			<div class="row">
					
				<h3 class="ion-clipboard" style="margin-left: 15px"> Meios de Contato</h3>

				<div class="form-group col-md-4">
					<label for="celular">Celular *</label>
					<input type="text" class="form-control input-sm" id="colaboradorCelular" 
					name="celular" placeholder="digite seu celular...">
				</div>

				<div class="form-group col-md-4">
					<label for="telefone">Telefone</label>
					<input type="text" class="form-control input-sm" id="colaboradorTelefone" 
					name="telefone" placeholder="digite seu telefone...">
				</div>

				<div class="form-group col-md-4">
					<label for="email">E-mail</label>
					<input type="email" class="form-control input-sm" id="colaboradorEmail" 
					name="email" placeholder="digite seu e-mail...">
				</div>	
			</div>
		</div>	
	</div>

	<div class="box box-default">
		<div class="box-body">
			<div class="row">

				<h3 class="ion-clipboard" style="margin-left: 15px"> Endereco</h3>
					
				<div class="form-group col-md-2">
					<label for="cep">CEP *</label>
					<input type="text" class="form-control input-sm" id="colaboradorCep" 
					name="cep" placeholder="digite seu cep...">
				</div>

				<div class="form-group col-md-7">
					<label for="endereco">Endereço *</label>
					<input type="text" class="form-control input-sm" id="colaboradorRua" 
					name="endereco" placeholder="digite seu endereço...">
				</div>

				<div class="form-group col-md-3">
					<label for="complemento">Complemento *</label>
					<input type="text" class="form-control input-sm" id="colaboradorComplemento" 
					name="complemento" placeholder="digite seu complemento...">
				</div>

				<div class="form-group col-md-2">
					<label for="numero">Número</label>
					<input type="text" class="form-control input-sm" id="colaboradorNumero" 
					name="numero" placeholder="digite o nº da sua residência...">
				</div>

				<div class="form-group col-md-4">
					<label for="bairro">Bairro</label>
					<input type="text" class="form-control input-sm" id="colaboradorBairro" 
					name="bairro" placeholder="digite seu bairro...">
				</div>

				<div class="form-group col-md-4">
					<label for="cidade">Cidade *</label>
					<input type="text" class="form-control input-sm" id="colaboradorCidade" 
					name="cidade" placeholder="digite sua cidade...">
				</div>

				<div class="form-group col-md-2">
						<label for="uf">Estado(UF) *</label>
							<select class="form-control input-sm" id="colaboradorUf" name="uf">
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
					<label for="descricao">Descrições adicionais</label>
					<textarea type="email" class="form-control input-sm" id="colaboradorDescricao" 
					name="descricao" placeholder="digite sua descricão..."></textarea>
				</div>

				<div class="form-group" style="margin-left: 15px">	
					<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
					<a href="../colaboradores" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
				</div>
			</div>
		</div>	
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>