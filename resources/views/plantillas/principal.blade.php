<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, 
          user-scalable=no, 
          initial-scale=1.0, 
          maximum-scale=1.0, 
          minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VAcad</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/aplicacion.css') !!}">



    <style type="text/css">
    	

    	body
    	{
    		background-color:  #c5cae9;
    		/*background-image: url(img/fond.jpg);*/
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" 
					class="navbar-toggle collapsed" 
					data-toggle="collapse" 
					data-target="#bs-navbar-collapse-1" 
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">PROYECTO LARAVEL-2017</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
				
				

				@if(!Auth::check())
					<li><a href="{{ route('usuarios.login') }}">Iniciar sesión</a></li>
					<li><a href="{{ route('usuarios.registro') }}">Registrarse</a></li>

				@else

 						<li>
			            	<a href="" class="alert alert-info"><span class=" glyphicon glyphicon-user"></span> Bienvenido: 
				            	@if(Auth::user()->tipo==='adm') (Administrador)
				            	@elseif(Auth::user()->tipo==='pub') (Publicador)
								@elseif(Auth::user()->tipo==='lec') (Lector)	
				            	@endif
				            	{{ Auth::user()->nombres}}&nbsp;{{ Auth::user()->apellidos}}&nbsp;
			            	</a>
			           	</li>


					<li class="dropdown">
						<a href="#" 
							class="dropdown-toggle" 
							data-toggle="dropdown" 
							role="button" 
							aria-haspopup="true" 
							aria-expanded="false">
							<b class="glyphicon glyphicon-plus"></b>
							Opciones 
							<span class="caret"></span>
						</a>
			          	 <ul class="dropdown-menu">
			          		{{-- <li>
			            		<a href="{{ route('usuarios.create') }}">
			            			regirstrar nuevo usuario
			            		</a>
			            	</li> --}}

			          		@if(Auth::user()->tipo === 'adm')
			          		@include('plantillas.menu-adm')
			          		@elseif(Auth::user()->tipo === 'pub')
			          		@include('plantillas.menu-pub')
			          		@elseif((Auth::user()->tipo === 'lec'))
			          		@include('plantillas.menu-lec')
			          		@endif
			            	<li>
			            		<a href="{{ route('usuarios.logout') }}" class="btn btn-danger">
			            			<span class="glyphicon glyphicon-lock">&nbsp;</span>  Cerrar sesión
			            		</a>
			            	</li>
			          	</ul>
			        </li>
					@endif 

					<li><a href="{{ route('usuarios.home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				</ul>
			</div>
		</div>
	</nav>
<div class="page-header">
	
</div>
	<article id="contenido">
		<div class="container-fluid">
		@yield('contenido')		
		</div>
	</article>

	<footer class="text-left" id="pie">
		<div class="container-fluid text-center">
			<strong>@Copyright:2017</strong>
			<div class="container-fluid text-right">
			<h5>By:Rodrigo Acuña garcia</h5>
			
			</div>
			
		</div>
			
		
	</footer>

	<script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	

	@yield('script')
		
</body>
</html>