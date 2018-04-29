<?php $__env->startSection('title', 'Backup'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><span class="ion-settings"> Backups do Sistema</span></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#"><i class="ion-settings"></i> Backups</a></li>
</ol>

		<?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
   
    <div class="box box-default">
	<div class="box-body">
		<div class="row">
    </div>
    <center><h4><span class="ion-alert-circled"> <strong>Aviso importante:</strong> Faça um backup antes de restaurar a qualquer versão anterior do sistema</h4></center>
    <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-download"></i> Fazer cópia de segurança</button><br>
    <button type="button" class="btn btn-success btn-lg btn-block"><i class="fa fa-upload"></i> Restaurar cópia de segurança</button>
    </div>
   
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>