<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table='libros';

    public function autores() {
        return $this->belongsToMany('App\Autor','libros_autores','fk_autores')->withPivot('fecha');
    }

    public function fotos()
    {
        return $this->hasMany('App\Foto','id','libro_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comentarios','id','fk_libros');
    }

    public function libros_pedidos(){
        return $this->belongsToMany(\App\Libros_pedidos::class, 'libros_pedidos', 'fk_libros');
    }
}
