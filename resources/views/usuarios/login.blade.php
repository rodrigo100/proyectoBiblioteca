@extends('plantillas.principal')
@section('contenido')

<div class="row">
	
	<div class="col-md-4"></div>
	<div class="col-md-4">
		
           <div class="panel panel-primary">
           	 <div class="panel-heading">
           	 	<h1>Inicio de Sesion</h1>
           	 </div>
           	 <div class="panel-body">
           	   <div class="form-group">

           	   	           
           	   @if(session('mensaje'))
			     <div class="alert alert-success">
			      {{ session('mensaje') }}
			     </div>
			     @endif

			  @if($errors->has('login'))
			  <div class="alert alert-danger">
				{{ $errors->first('login') }}
			 </div>


			 @endif
			     {!! Form::open(['route' => 'usuarios.logear']) !!}
				   
				   <div class="form-group">
					{!! Form::label('username', 'Nombre de usuario', ['class' => 'control-label']) !!}
					{!! Form::text('username', null, ['class' => 'form-control','placeholder'=>'Ingrese el nombre de usuario']) !!}
				   </div>

				   <div class="form-group">
					{!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
					{!! Form::password('password', ['class' => 'form-control','placeholder'=>'*****************************']) !!}
				  </div>

			    	 <div class="text-right">
					<button type="submit" class="btn btn-primary">
						<b class="glyphicon glyphicon-log-in"></b> Ingresar
			 		</button>
			    	</div>
				
			       {!! Form::close() !!}
           	   </div>
           	 	
           	 </div>
           	 <div class="panel-footer">
           	 	<div>
					<a href="{{route('usuarios.registro')}}">Registrarse</a>
				</div>
           	 </div>

           </div>




	</div>
	<div class="col-md-4"></div>
</div>


@endsection