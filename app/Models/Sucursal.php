<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sucursals';

    public function productossuc(){
        return $this->hasMany(Producto::class);
   }

}
