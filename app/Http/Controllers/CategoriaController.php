<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function menucat(){
        return view('/categoria');
    }
    
    public function creacat(){
        return view('/creacategoria');
    }

    public function modcat(){
        return view('/modcategoria');
    }

    public function elicat(){
        return view('/elicategoria');
    }
}
