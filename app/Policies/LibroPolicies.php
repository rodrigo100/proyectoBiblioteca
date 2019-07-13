<?php

namespace App\Policies;


use Illuminate\Auth\Access\HandlesAuthorization;
use App\Modelos\Usuario;
use App\Modelos\Libro;

class LibroPolicies
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }



     public function edit(Usuario $usuario, Libro $libro)
    {
        return $usuario->esAdm() || 
            $usuario->id_usuario === $libro->id_publicador;
    }
}
