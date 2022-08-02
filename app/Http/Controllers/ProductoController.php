<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function menuprod(){
        return view('/producto');
    }
    
    public function creaprod(){
        return view('/creaproducto');
    }

    public function modprod(){
        return view('/modproducto');
    }

    public function eliprod(){
        return view('/eliproducto');
    }
   
}
