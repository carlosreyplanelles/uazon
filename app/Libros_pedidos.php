<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros_pedidos extends Model
{
    protected $table='libros_pedidos';

    public function libros(){
        return $this->belongsTo(\App\Libro::class,'id','fk_libros');
    }
    public function pedidos(){
        return $this->belongsTo(\App\Order::class,'id','fk_pedidos');
    }
}
