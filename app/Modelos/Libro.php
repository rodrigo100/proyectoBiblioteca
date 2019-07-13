<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;


class Libro extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'id_libro';

    public $fillable = [
    	'titulo', 'descripcion', 'archivo',
    	];




public function publicador()
{

	return $this->belongsTo('App\Modelos\Usuario','id_publicador','id_usuario');

}
public function suscripciones()
    {
        return $this->hasMany('App\Modelos\Suscripcion',
            'id_libro', 'id_libro');
    }





public function setArchivoAttribute($value)
    {
        if($value !== null)
        {
            $nombre = rand(1000, 9999) . '-' . 
                $value->getClientOriginalName();
            $value->move(storage_path('app/documentos'), $nombre);
            $this->attributes['archivo'] = 'app/documentos/' . $nombre;
        }
    }



}

