@extends('plantillas.principal')
@section('contenido')

<div class="main"> 
	<div class="container">
	     
	    
	
		          <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h1 class="text-center">Lista de usuarios registrados</h1>
                  <a class="btn btn-warning " title="Nuevo usuario" href="{{ route('usuarios.create') }}"> <span class="glyphicon glyphicon-plus"></span> </a>

{{-- mensaje para mostrr que el registro fue eliminado --}}
                     

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


                              <table class="table table-hover">
                                   <thead>
                         <tr>
                              <th >Nombres</th>
                              <th >Apellidos</th>
                              <th >Correo</th>
                              <th >Tipo</th>
                              <th  class="label label-primary center-block"> Opciones</th>
                         </tr>
                                   </thead>
                              <tbody>

                                 @foreach($usuarios as $usuario)
                                        <tr>
                                  <td>{{$usuario->nombres }}</td>
                                  <td>{{$usuario->apellidos }}</td>
                                  <td>{{$usuario->email }}</td>
                                  <td>{{$usuario->tipo }}</td>
                                 <td class=" form-group center-block">
                                    <div class=" text-center">
                                             <a href="{{ route('usuarios.show', 
                                               ['id' => $usuario->id_usuario]) }}" 
                                              class="btn btn-xs btn-warning" title="Ver">
                                               <b class="glyphicon glyphicon-eye-open"></b>
                                             </a>

                                            <a href="{{ route('usuarios.edit', 
                                            ['id' => $usuario->id_usuario]) }}" 
                                            class="btn btn-xs btn-success" title="Editar">
                                            <b class="glyphicon glyphicon-edit"></b>
                                             </a>
                                



                                       {!! Form::open(['route' => 
                                            ['usuarios.destroy', $usuario->id_usuario],
                                         'method' => 'delete', 
                                         'class' => 'form-eliminar']) !!}
                                      
                                             <button type="submit" class="btn btn-xs btn-danger" title="Eliminar">
                                           <b class="glyphicon glyphicon-trash"></b>
                                          </button>
                                       {!! Form::close() !!}


{{-- boton para confoirmar eliminacion mediante un script
                                       {!! Form::open(['route' => 
                                            ['destroyUsuario', $usuario->id_usuario],
                                         'method' => 'delete',
                                         ]) !!}
                                      
                                             <a href="#" class="eliminar">
                                          
                                             
                                           <b class="glyphicon glyphicon-trash"></b>
                                           </b>
                                            </a>
                                       {!! Form::close() !!} --}}





                                    </div>


                                             
                                         </td>
                                         </tr>
                                           
                           


                                    @endforeach
                            </tbody>
                          </table>  
   {{--  para la paginacion --}}
                         {!!$usuarios->render()!!} 
                    </div>

                    <div id="alert" class="alert alert-info">
                      
                    </div>

                    <div class="panel-footer">
                      @copyrigth
                    </div>
                
              </div>
  
               
    
</div>




	</div>



@endsection



@section('script')

<script src="{!! asset('js/script.js') !!}"></script>




@endsection