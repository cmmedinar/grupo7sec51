<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $primaryKey = 'id';
   protected $table = 'categorias';

   public function productoscat(){
        return $this->hasMany(Producto::class);
   }
   
}
