@extends('plantillas.principal')
@section('contenido')







<div class="row">
  
  <div class="col-md-2"></div>
  <div class="col-md-8"> 
        
<div class="panel panel-primary">
    <div class="panel-heading">
       <h1>Mis publicaciones</h1>
        <div class="text-left">
              <a class="btn btn-warning " href="{{ route('libros.create') }}"> <span class="glyphicon glyphicon-plus"></span> Registar</a>
             </div> 

    </div>
   
 

    <div class="panel-body">

                @if (Session::has('borrado'))
                <div class="alert alert-success">
                  {{Session::get('borrado')}}
                </div>
                  
                @endif
                 @if (Session::has('actualizado'))
                <div class="alert alert-success">
                  {{Session::get('actualizado')}}
                </div>
                  
                @endif

                 @if (Session::has('registrado'))
                <div class="alert alert-success">
                  {{Session::get('registrado')}}
                </div>
                  
                @endif



  {{--  aqui hacemos la relacion que tine el publicador con  libros del Modelo Usuario metodo (libros)  y mostramos los atributos de ese libro --}}
  {{-- se pued eusar forlese para mostar si no tien datos mostrar mensaje de que no exisren datos , pero se podria usar un foreach si no queremos mensaje --}}
               @forelse($publicador->libros as $pub)
                 <strong> Titulo:</strong> {{$pub->titulo}}<br>
                          <strong class="alert-info">Descripcion:</strong> {{$pub->descripcion}}<br>
                          <strong>Documento:</strong> {{$pub->archivo}}<br>
             
                   <article>
                   

                         {{-- <strong>Subido por:</strong> {{$pub->publicador->nombreCompleto}}<br> --}}
                          {{-- <strong>Fecha de subida:</strong> {{$pub->libros->created_at}}<br> --}}
                          
                          
                         
                       
                          

                              <div class="form-group">
                                      {!! Form::open(  ['route' => 
                                            ['libros.destroy', $pub->id_libro],
                                         'method' => 'delete', 
                                         'class' => 'form-eliminar'] ) !!}
                                      
                                             <button type="submit" class="btn btn-xs btn-warning" title="Eliminar">
                                            <span class="glyphicon glyphicon-trash"></span> Eliminar
                                          </button>
                                     {!! Form::close() !!}

                              </div>
                              <div class="form-group">
                                         <a href="{{ route('libros.edit', 
                                            ['id' => $pub->id_libro]) }}" 
                                            class="btn btn-xs btn-success" title="Editar">
                                            <span class="glyphicon glyphicon-edit"></span> Actualizar
                                         </a>
                             </div>  
            

                                      

                             

                             
                           <div class="page-header"></div>

                    </article>
                     @empty

                                            <div class="alert alert-info ">
                                                Usted no registro ningun libro
                                              
                                            </div>
                     @endforelse
            
                 
      
    </div>

    <div class="panel-footer">
       <h5>@Copyrigth</h5>
    </div>
  
</div>



  </div>
  <div class="col-md-2">
    
  </div>
</div>


	@endsection