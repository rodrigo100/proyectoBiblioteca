@extends('plantillas.principal')
@section('contenido')


<div class="main">
<div class="container">

  	<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Lista de libros en los que se ha suscrito</h4>
				</div>
		<div class="panel-body">
			@if(session('mensaje'))
			<div class="alert alert-success">
				{{ session('mensaje') }}
			</div>
			@endif
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Descripcion</th>
						<th>Subido por</th>
						<th>Opcion</th>
					</tr>
				</thead>
				<tbody>
					@forelse($suscripciones as $suscripcion)
					
					<tr>
									<td>{{ $suscripcion->libro->titulo }}</td>
									<td>{{ $suscripcion->libro->descripcion }}</td>
									<td>{{ $suscripcion->libro->publicador->nombreCompleto }}</td>



									<td>
			                     	
			                     	 <a href="{{ route('suscripciones.descargar', 
			                                                       ['id' => $suscripcion->libro->id_libro]) }}">
			                                                 <button type="submit" class="btn btn-xs btn-danger" title="Eliminar">
			                                                      <b class="glyphicon glyphicon-download-alt"> Descargar</b>
			                                                 </button>
			                              </a> 
			                     	</td>
					</tr>

                     

	


                   @empty
					<tr class="text-center">
						<td colspan="3">
						<div class="alert alert-info">
							No está suscrito a ninguna publicacion
						</div>
						</td>
					</tr>
					
					
					
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
	
</div>
	
</div>



@endsection
