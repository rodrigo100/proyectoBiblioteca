<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{

    protected $table = 'suscripciones';
    protected $primaryKey = 'id_suscripcion';


  public function libro()
    { //belongTo porque reciube llave foranea
    	return $this->belongsTo('App\Modelos\Libro',
    		'id_libro', 'id_libro');
    }

    public function lector()
    {
    	return $this->belongsTo('App\Modelos\Usuario',
    		'id_lector', 'id_usuario');
    }
}
