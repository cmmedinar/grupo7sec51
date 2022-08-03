<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function menuprod(){
        return view('/productos/producto');
    }
    public function creaprod(){
        return view('/productos/creaproducto');
    }
    public function modprod(){
        return view('/productos/modproducto');
    }
    public function eliprod(){
        return view('/productos/eliproducto');
    }
    public function consultaprod(){
        return view('/productos/consultaproducto');
    }
    public function consultaprodById(){
        return view('/productos/consultaByIdproducto');
    }
    public function listaprod(){
        $productos = Producto::get();

        //dd($productos);

        return view('/productos/listaproducto',[
            'productos' => $productos

        ]);
    }

}
