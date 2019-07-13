@extends('plantillas.principal')
@section('contenido')


<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">

   <div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Libros disponibles</h4>
		</div>

		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Decripcion</th>
						<th>Publicado por</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					@forelse($libros as $libro)
					<tr>
						<td>{{ $libro->titulo }}</td>
						<td>{{ $libro->descripcion }}</td>
						<td>{{ $libro->publicador->nombreCompleto }}</td>
						<td>
							<a href="{{ route('suscripciones.suscribir', ['id' => $libro->id_libro]) }}" 
								class="btn btn-xs btn-primary" title="Inscribirse">
								<b class="glyphicon glyphicon-pencil"></b>
							</a>
						</td>
					</tr>
					@empty
					<tr class="text-center">
						<td colspan="3">
						No existen publicaciones disponibles</td>
					</tr>
					
					@endforelse
				</tbody>
			</table>

			{{-- {!! $cursos->links() !!} --}}
		</div>
	</div>


	
</div>
<div class="col-md-2"></div>
	
</div>
@endsection