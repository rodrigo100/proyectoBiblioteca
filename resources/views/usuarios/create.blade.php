@extends('plantillas.principal')
@section('contenido')

<div class="row">


 <div class="col-md-4"></div>
 <div class="col-md-4">

 	  <div class="panel panel-warning">
				<div class="panel-heading">
				<h4> <span class="glyphicon glyphicon-user"></span> Nuevo usuario</h4>
				</div>
			<div class="panel-body">
						      
						       {!! Form::open(['route' => 'usuarios.store',]) !!} 

						      		 @include('usuarios.form-basic')
						      		  @include('usuarios.formPassword')
						      		  @include('usuarios.formTipo')

			</div>
			<div class="panel-footer">
				 <button type="submit" class="btn btn-warning">
												<b class="glyphicon glyphicon-check"></b> Crear
											</button>
						         <a href="{{ route('usuarios.index') }}" class="btn btn-danger">Cancelar </a>
						      {!! Form::close() !!}	
			</div>
	  </div>
	  </div>
					       
					       
		
 <div class="col-md-4"></div>

	
</div>




@endsection