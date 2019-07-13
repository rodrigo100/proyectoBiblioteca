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
						      
						       {!! Form::open(['route' => 
							'usuarios.registrar', 
										'files' => true]) !!}
		   					    @include('usuarios.form-basic')
		   							    @include('usuarios.formPassword')
		
							<div class="text-center">
					<button type="submit" class="btn btn-primary">
						<b class="glyphicon glyphicon-pencil"></b> Registrarse
				  </button>
				  	<a href="{{ route('usuarios.login') }}" class="btn btn-danger">Cancelar </a>
						      {!! Form::close() !!}	
				</div>
				{!! Form::close() !!}


			</div>
			<div class="panel-footer">
				
					
			</div>
	  </div>
	  </div>
					       
					       
		
 <div class="col-md-4"></div>

	
</div>


@endsection