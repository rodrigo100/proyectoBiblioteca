@extends('plantillas.principal')
@section('contenido')


<div class="row">
	
	<div class="col-md-4"></div>
	<div class="col-md-4">

	  
	 	 <div class="panel panel-warning">
				<div class="panel-heading">
				<h4><span class="glyphicon glyphicon-file"></span> Datos del usuario</h4>
				</div>
		<div class="panel-body">
	 
			<table class="table table-condensed">
				<tr>
					<td><strong>Id. de Usuario</strong></td>
					<td>{{ $usuarios->id_usuario }}</td>
				</tr>
				<tr>
					<td><strong>Nombre</strong></td>
					<td>{{ $usuarios->nombres}}</td>
				</tr>
				<tr>
					<td><strong>Apellidos</strong></td>
					<td>{{ $usuarios->apellidos}}</td>
				</tr>
				
				<tr>
					<td><strong>Email</strong></td>
					<td>{{ $usuarios->email }}</td>
				</tr>
				
				<tr>
					<td><strong>Tipo de usuario</strong></td>
					<td>{{ $usuarios->tipo }}</td>
				</tr>
			</table>

				
			</div>
			<div  class="panel-footer">
				<div class="text-center">
				<a class="btn btn-warning " href="{{ route('usuarios.index') }}">Salir</a>
				</div>
			</div>
				
		
	</div>

	</div>
	<div class="col-md-4"></div>
</div>



@stop