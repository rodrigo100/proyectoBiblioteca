<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Suscripcion;
use App\Modelos\Libro;

class SuscripcionController extends Controller
{

	public function suscribirse()
	{
		//llamamos al metodo suscripciones modelo(Libro) donde se aloja la llave foranea en relacion libro y suscripciones(modelos)
   			$libroSuscripcion = auth()->user()
    		->suscripciones()->get(['id_libro'])->toArray(); //este metodo sirve para convertir el Collection en un array

    	//registramos el nievo libro
    	$libros = Libro::whereNotIn('id_libro', $libroSuscripcion)
    		->paginate(5);

    		//mostramos los libros de oferta en las vistas suscriociones
    	return view('suscripciones.ofertas', compact('libros'));
    }


 


  public function suscribir($id)
  {
  	    $libros = Libro::findOrFail($id);

    	$suscripcion = new Suscripcion();
    	//capturamos en id lector al usuario 
    	$suscripcion->id_lector = auth()->user()->id_usuario;

    	//capturamos en id lrbro en id del curso 
    	$suscripcion->id_libro = $libros->id_libro;


    	//caperturando las dos llves foraneas para alnacenar en la tabla suscripciones lo guardamos y redirecionamos
    	$suscripcion->save();
      
    	return redirect()->route('suscripciones.suscritos');
    	

  }


public function suscritos()
{
	//llamamos a la tabla suscripciones
	$suscripciones = auth()->user()->suscripciones;
    	return view('suscripciones.suscritos', compact('suscripciones'));
}





  public function descargar($id)
  {
         // $publicacion=Libro::findOrFail($id);
         // $rutaarchivo= "/app/documentos/".$publicacion->archivo;
         // return response()->download($rutaarchivo);
        //   
          $libro = Libro::findOrFail($id);

        $ruta = storage_path($libro->archivo);
// dd($ruta);
      $obtener= file_get_contents($ruta);
        return response()->download($ruta);
  }



}
