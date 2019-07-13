@extends('plantillas.principal')
@section('contenido')



<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4><span class="glyphicon glyphicon-edit" ></span> Editar Usuario</h4>
		</div>
		<div class="panel-body">
			{!! Form::model($usuarios, [
				'route' => ['usuarios.update', $usuarios->id_usuario],
				'method' => 'put',
				'files' => true,
				]) !!}


				@include('usuarios.form-basic')	

				@include('usuarios.formTipo')
				<div class="page-header">
					
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-success">
						<b class="glyphicon glyphicon-edit"></b> Actualizar
					</button>
					<a class="btn btn-danger" 
						href="{{ route('usuarios.index') }}">
						<b class="glyphicon glyphicon-remove"></b> Salir
					</a>
				</div>

				
			

			{!! Form::close() !!}	
		</div>
	</div>
</div>


@endsection