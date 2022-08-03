<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'productos';

    public function categorias(){
        return $this->belongsTo(Categoria::class,(categoria_id));
    }

    public function sucursals(){
        return $this->belongsTo(Sucursal::class,(sucursal_id));
    }

}
