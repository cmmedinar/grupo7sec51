<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function menucat(){
        return view('/categorias/categoria');
    }
    
    public function creacat(){
        return view('/categorias/creacategoria');
    }

    public function modcat(){
        return view('/categorias/modcategoria');
    }

    public function elicat(){
        return view('/categorias/elicategoria');
    }

    public function listacat(){
        $categorias = Categoria::get();

        //dd($sucursals);

        return view('/categorias/listacategoria',[
            'categorias' => $categorias

        ]);
    }

}
