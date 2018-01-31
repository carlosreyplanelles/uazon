<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table='libros';

    public function autores() {
        return $this->belongsToMany('App\Autor','libros_autores','libro_id','autor_id')->withPivot('fecha');
    }

    public function fotos()
    {
        return $this->hasMany('App\Foto','id','libro_id');
    }
}
