<?php $__env->startSection('title', 'Cadastrar Comarca'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="ion-person-add"> Adicionar nova Comarca</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
<ol class="breadcrumb">
    <li><a href="/painel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Comarcas</li>
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
	        
				<h3 class="ion-clipboard" style="margin-left: 15px"> Dados</h3>

	            <div class="form-group col-md-12">
	            	<label for="nome">Descrição *</label>
	            	<input type="text" class="form-control input-sm" id="comarcaDescricao" 
					name="nome" placeholder="digite o nome da comarca...">
	    		</div>

				<div  class="form-group" style="margin-left: 15px">	
					<button type="submit" class="btn btn-success btn-sm"><b class="fa fa-paper-plane"></b> Salvar Novo</button>
					<a href="../comarcas" class="btn btn-primary btn-sm"><b class="fa fa-reply-all"></b> Voltar à Lista</a>
				</div>
			</div>
		</div>	
	</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>