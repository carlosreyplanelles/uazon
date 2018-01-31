<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table='autores';

    public function libros()
    {
        return $this->belongsToMany('App\Libro','libros_autores')->withPivot('fecha');
    }
}
