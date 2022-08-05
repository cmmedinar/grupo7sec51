<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function menuprod(){
        return view('/productos/producto');
    }

    public function creaprod(){
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();

        return view('/productos/creaproducto',[
            'sucursals' => $sucursals],[
             'categorias' => $categorias
            ]);
    }

    public function grabaprod(Request $request){

            $this->validate($request,[
                'codprod' => 'required',
                'nomprod' => 'required',
                'catprod' => 'required',
                'sucprod' => 'required',
                'desprod' => 'required',
                'cantprod' => 'required',
                'precioprod' => 'required'
            ]);  
          
        //dd($request);
        $producto = new Producto();
        $producto->codigo = $request -> codprod;
        $producto->nombre = $request -> nomprod;
        $producto->categoria_id = $request -> catprod;
        $producto->sucursal_id = $request -> sucprod;
        $producto->descripcion = $request -> desprod;
        $producto->cantidad = $request -> cantprod;
        $producto->precio = $request ->precioprod;
        $producto->estado = true;
        
        $producto->save();


        //volvemos a cargar el formulario de ingreso
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();
     
        return view('/productos/creaproducto',[
            'sucursals' => $sucursals],[
             'categorias' => $categorias
            ]);

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
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();

        //dd($categorias);

        return view('/productos/listaproducto',
            ['productos' => $productos,
            'categorias' => $categorias,
            'sucursals' => $sucursals
             ]);
    }
    
}
