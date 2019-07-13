<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Libro;
use App\Http\Requests\LibroForm;
use App\Http\Requests\LibroFormUpdate;
use Illuminate\Support\Facades\Session;

class LibrosController extends Controller
{
  

public function __construct()
{
       $this->middleware('autentificado', [
           'except' => ['login', 'logear',]
           ]);

        $this->middleware('admpub', ['only' => [
            'index', 'create', 'store', 'edit', 'update', 'destroy',
            ]]);
       
}



    public function index()
    {
       
//capturamos el id del usuario
           $publicador = auth()->user();
           
            //dd($publicador);
            return view('libros.index',compact('publicador'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LibroForm $request)
    {

       // $valores = $request->all();
       //  $libros = Libro::create($valores);
       //  return redirect()->route('libros.index');
          
         $libro = new Libro($request->all()); 
        $libro->id_publicador = auth()->user()->id_usuario;
        $libro->save();
        Session::flash('registrado',$libro->titulo.','.'fue registrado exitosamente..!!!');
        return redirect()->route('libros.index', ['id' => $libro->id_libro]);
      
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $libros = Libro::findOrFail($id);
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libros= Libro::findOrFail($id);

        //funcion del police para editar
       $this->authorize('edit', $libros);
        return view('libros.edit',compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LibroFormUpdate $request, $id)
    {
         $libros = libro::findOrFail($id);
        // $this->authorize('edit', $libros);  
        $libros->fill($request->all());  
        $libros->save();
        Session::flash('actualizado',$libros->titulo.','.'fue actualizado..!!!');
        return redirect()->route('libros.index', 
            ['id' => $libros->id_libro]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libros = Libro::findOrFail($id);
        $libros->delete();
        Session::flash('borrado',$libros->titulo.','.'fue eliminado..!!!');
        return redirect()->route('libros.index');
          
    }




    public function archivo($id)
    {
        $libros = Usuario::findOrFail($id);
        $ruta = storage_path($libros->archivo);
        return file_get_contents($ruta);
    }
    
    


}
