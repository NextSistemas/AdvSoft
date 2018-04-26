@extends('adminlte::page')

@section('title', 'Backup')

@section('content_header')
    <h1><span class="ion-settings"> Backups do Sistema</span></h1>
@stop

@section('content')
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#"><i class="ion-settings"></i> Backups</a></li>
</ol>

		@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
   
    <div class="box box-default">
	<div class="box-body">
		<div class="row">
    </div>
    <center><h4><span class="ion-alert-circled"> <strong>Aviso importante:</strong> Faça um backup antes de restaurar a qualquer versão anterior do sistema</h4></center>
    <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-download"></i> Fazer cópia de segurança</button><br>
    <button type="button" class="btn btn-success btn-lg btn-block"><i class="fa fa-upload"></i> Restaurar cópia de segurança</button>
    </div>
   
    </div>


@stop