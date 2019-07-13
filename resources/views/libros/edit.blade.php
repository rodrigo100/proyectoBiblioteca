@extends('plantillas.principal')
@section('contenido')


 
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4><span class="glyphicon glyphicon-edit" ></span> Editar libro</h4>
		</div>
		<div class="panel-body">
			{!! Form::model($libros, [
				'route' => ['libros.update', $libros->id_libro],
				'method' => 'put',
				'files' => true,
				]) !!}


				@include('libros.form-basic')	

				
				<div class="page-header">
					
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-success">
						<b class="glyphicon glyphicon-edit"></b> Actualizar
					</button>
					<a class="btn btn-danger" 
						href="{{ route('libros.index') }}">
						<b class="glyphicon glyphicon-remove"></b> Salir
					</a>
				</div>




@endsection
