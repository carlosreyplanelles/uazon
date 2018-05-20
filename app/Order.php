<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='pedidos';

    public function libros_pedidos() {
        return $this->hasMany(\App\Libros_pedidos::class,'fk_pedidos','id');
    }

    public function usuarios(){
        return $this->belongsTo(\App\User::class,'fk_usuario','id');
    }

}
