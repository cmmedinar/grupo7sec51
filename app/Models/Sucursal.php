<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sucursals';

    public function inventariossuc(){
        return $this->hasMany(Inventario::class);
   }

}
