<?php

namespace App\Modelos;


use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    public $fillable = [
    	'nombres', 'apellidos', 'email', 
    	 'username', 'password', 'tipo',
    	];

    public function libros()
    {
        // aqui capturamos la llave foranea del publicador del libro
        return $this->hasMany('App\Modelos\Libro',
            'id_publicador', 'id_usuario');
    }

     public function suscripciones()
    {
        return $this->hasMany('App\Modelos\Suscripcion',
            'id_lector', 'id_usuario');
    }



    public function setPasswordAttribute($value)
    {
    	if($value !== null)
    		$this->attributes['password'] = bcrypt($value);
    }


    public function getNombreCompletoAttribute()
    {
        return $this->attributes['nombres'] . ' ' .
            $this->attributes['apellidos'];
    }

    
 public function esAdm()
    {
        return $this->attributes['tipo'] === 'adm';
    }

    public function esPub()
    {
        return $this->attributes['tipo'] === 'pub';   
    }


}
