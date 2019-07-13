@extends('plantillas.principal')
@section('contenido')



<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 80%;
      margin: auto;
  }
  </style>



				
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{!! asset('img/c.png') !!}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Gadget</h3>
          <p>Revistas para todo tipo de edades.....</p>
        </div>
      </div>

      <div class="item">
        <img src="{!! asset('img/dinero.png') !!}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Dinero</h3>
          <p>Con amplia gama de revistas y libros </p>
        </div>
      </div>
    
      <div class="item">
        <img src="{!! asset('img/tech.png') !!}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Tech.mx</h3>
          <p>Revistas mexicanas... </p>
        </div>
      </div>

      <div class="item">
        <img src="{!! asset('img/cosass.png') !!}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Cosas</h3>
          <p>Revista familiar, farandula,cine y teatro</p>
        </div>
      </div>
       <div class="item">
        <img src="{!! asset('img/alo.png') !!}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>alo.co</h3>
          <p>Revista colombiana.....</p>
        </div>
      </div>
       <div class="item">
        <img src="{!! asset('img/adn.png') !!}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>ADN</h3>
          <p>Revista mexicana.....</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="page-header">

{{-- 
si aun no se ha iniciado sesion que muestre para que se registrarte --}}
   @if(!Auth::check())
  <marquee BGCOLOR=#27ae60 behavior=alternate  HEIGHT=80 ALIGN=button>
    
    <font  FACE="IMPACT" COLOR=red SIZE=5>
    <span class="glyphicon glyphicon-hand-right"></span>
        Aquí podras descargar, todo tipo de revistas,articulos,libros con solo registrarte...!!!
        <span class="glyphicon glyphicon-hand-right"> &nbsp;</span>
      
    </font> 
  <div class="text-center">
     <a href="{{ route('usuarios.create') }}" class="btn btn-primary"> REGISTRARSE</a>
  </div>
 
  @else
  
  @endif
      
  </marquee>

  
</div>



<div class="row">
   <div class="col-md-4">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                      <h1 class="mb-1">Tendencias</h1>
                    
                    </div>
                    <h3 class="mb-1">Tecnologia</h3>
                    <small>Libros en las cuales la gente esta informada sobre el avance y los descubrimientos que se dieron durante y antes desde que aparecio en hombre....</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                       <h3 class="mb-1">Hitoria</h3>
                     
                    </div>
                    <p class="mb-1">Muchas de las historias son verdaderamente reales, porque han sido descubiertas por dichos autores de libros que llevan años de trabajo para su investigacion plazmandola en un libro.</p>
                  
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h3 class="mb-1">Botánica</h3>
                    </div>
                    <p class="mb-1"> Amplio estudio en las areas de la biodiversidad del ecosistema, ed decir las plantas ,bosques,viveros,rios,lagos,lagunas, mares, todo es estudiado desde la Botanica </p>
                                     </a>
                </div>
  
   	</div>	

   	<div class="col-md-4">
                
               <article>
                <h1>Tecnologia</h1>
                    <p>Libros en las cuales la gente esta informada sobre el avance y los descubrimientos que se dieron durante y antes desde que aparecio en hombre....</p>
                   <img src="{!! asset('img/tec.jpg') !!}" alt="">
             
               </article>

                <p><strong>Nota:</strong> Aun no esta disponible para la suscripcion</p>

               <article>
                  <h1>Botánica</h1>
                     <p>Amplio estudio en las areas de la biodiversidad del ecosistema, ed decir las plantas ,bosques,viveros,rios,lagos,lagunas, mares, todo es estudiado desde la Botanica </p>
               <img src="{!! asset('img/bota.png') !!}" alt="">
             
               </article>

                   <p><strong>Nota:</strong> Aun no esta disponible para la suscripcion</p>



   	</div>	



   	<div class="col-md-4">
    

              
        
   		
   	</div>	

</div>



</div>










@endsection