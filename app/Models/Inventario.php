<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'inventarios';

    public function productos(){
        return $this->belongsTo(Productos::class,(producto_id));
    }

    public function sucursals(){
        return $this->belongsTo(Sucursal::class,(sucursal_id));
    }
}
