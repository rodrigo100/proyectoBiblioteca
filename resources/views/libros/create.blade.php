@extends('plantillas.principal')
@section('contenido')

<div class="row">


 <div class="col-md-4"></div>
 <div class="col-md-4">

 	  <div class="panel panel-warning">
				<div class="panel-heading">
				<h4> <span class="glyphicon glyphicon-user"></span> Registrar Libro</h4>
				</div>
			<div class="panel-body">
						  
						      
						       {!! Form::open(['route' => 'libros.store','files'=>true]) !!} 

						      		  @include('libros.form-basic')
						      		

			</div>
			<div class="panel-footer">
				 <button type="submit" class="btn btn-warning">
												<b class="glyphicon glyphicon-check"></b> Crear
											</button>
						         <a href="{{ route('libros.index') }}" class="btn btn-danger">Cancelar </a>
						      {!! Form::close() !!}	
			</div>
	  </div>
	  </div>
					       
					       
		
 <div class="col-md-4"></div>

	
</div>




@endsection