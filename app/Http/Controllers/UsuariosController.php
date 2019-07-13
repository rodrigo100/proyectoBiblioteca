<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Usuario;
use App\Http\Requests\UsuarioForm;
use App\Http\Requests\UsuarioFormUpdate;
use Illuminate\Support\Facades\Session;
class UsuariosController extends Controller
{
   

   public function __construct()
   {

        $this->middleware('autentificado', [
            'except' => ['login', 'logear','registro','registrar','home']
            ]);
        
         $this->middleware('adm', ['only' => [
             'index', 'create', 'store', 'edit', 'update', 'destroy',
             ]]);


         
   }




    public function index()
    {
 
      //con paginacaion
          $usuarios= Usuario::paginate(5);
           //sin paginacion
        //$usuarios= Usuario::all();

        return view('usuarios.index',compact('usuarios'));
    }

   
    public function create()
    {
        return view('usuarios.create');
    }


    public function store(UsuarioForm $request)
    {
         $valores = $request->all();
        Usuario::create($valores);
        Session::flash('registrado','Registrado..!!!!');
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $usuarios = Usuario::findOrFail($id);
        return view('usuarios.vista', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $usuarios = Usuario::findOrFail($id);
            return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioFormUpdate $request, $id)
    {
        $usuarios = Usuario::findOrFail($id);
        $usuarios->fill($request->all());
        $usuarios->save();
        Session::flash('actualizado','El registro fue actualizado..!!!!');
        return redirect()->route('usuarios.index', 
            ['id' => $usuarios->id_usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $usuarios = Usuario::findOrFail($id);    
         $usuarios->delete();
        Session::flash('borrado','El registro fue eliminado..!!!!');
         return redirect()->route('usuarios.index');
          
       
     
    }
     public function destroyUsuario(Request $request,$id)
    {
        if($request->ajax())
        {
         $usuarios = Usuario::findOrFail($id);    
         $usuarios->delete();
     
         $usuarios_total=Usuario::all()->count();
         return response()->json(['total'=>$usuarios_total,
            'mensaje'=>$usuarios->nombres.'fue eliminado']);
        }
     
    }
  





    public function login()
    {
        return view('usuarios.login');
    }


    public function logear(Request $request)
    {

             $credenciales = $request->only([
            'username', 'password'
            ]);
        if(auth()->attempt($credenciales))
            return redirect()
                ->route('usuarios.home');
        else return redirect()
                ->route('usuarios.login')
                ->withErrors([
                    'login' => 'Usuario o contraseña incorrectos'
                    ])
                ->withInput([
                    'username' => $request->input('username'),
                    ]);                
    }




    public function logout()
    {
        auth()->logout();
        return redirect()->route('usuarios.home');
    }




    public function registro()
    {
        return view('usuarios.registro');

    }
    public function registrar(UsuarioForm $request)
    {
         $usuario = Usuario::create($request->all());
        return redirect()->route('usuarios.login')->with([
            'mensaje' => 'Se ha registrado con exito'
            ]);
    }


    public function home()
    {
        return view('plantillas.inicio');
    }


}
