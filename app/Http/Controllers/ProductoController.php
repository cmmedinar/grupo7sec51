<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Inventario;


class ProductoController extends Controller
{
    public function menuprod(){
        return view('/productos/producto');
    }


    // Funciones de busqueda 
    public function buscaxcod($dato){
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();
        $inventarios = Inventario::get();

        $productos = Producto::where('codigo', 'LIKE', '%'.$dato.'%')->get();

        return view('/productos/muestrabuscar',[
            'productos' => $productos,
            'categorias' => $categorias,
            'inventarios' => $inventarios,
            'sucursals' => $sucursals
        ]);
    }

    public function buscaxnom($dato){
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();
        $inventarios = Inventario::get();

        $productos = Producto::where('nombre', 'LIKE', '%'.$dato.'%')->get();

        return view('/productos/muestrabuscar',[
            'productos' => $productos,
            'categorias' => $categorias,
            'inventarios' => $inventarios,
            'sucursals' => $sucursals
        ]);
    }

    public function buscaxsuc($dato){ 
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();
        $productos = Producto::get();

        $inventarios = Inventario::where('sucursal_id', $dato)->get();

        return view('/productos/muestrabuscar',[
            'productos' => $productos,
            'categorias' => $categorias,
            'inventarios' => $inventarios,
            'sucursals' => $sucursals
        ]);

    }

    
    public function creaprod(){
        $categorias = Categoria::get();

        return view('/productos/creaproducto',[
            'categorias' => $categorias
            ]);
    }

    public function grabaprod(Request $request){

            $this->validate($request,[
                'codprod' => 'required',
                'nomprod' => 'required',
                'catprod' => 'required',
                'desprod' => 'required',
            ]);  
          
        //dd($request);
        $producto = new Producto();
        $producto->codigo = $request -> codprod;
        $producto->nombre = $request -> nomprod;
        $producto->categoria_id = $request -> catprod;
        $producto->descripcion = $request -> desprod;
        
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
        $productos = Producto::get();
        return view('/productos/modproducto',[
            'productos' => $productos
        ]);
    }

    public function modprodId($id){
            $categorias = Categoria::get();
            $productos = Producto::where('id',$id)->get();
            //dd($productos);
            return view('/productos/muestramodprod',[
                'productos' => $productos],[
                'categorias' => $categorias
                ]);
        }
    
    public function grabamodprod(Request $request, $id){
        //dd($request);

            $this->validate($request,[
                'codprod' => 'required',
                'nomprod' => 'required',
                'catprod' => 'required',
                'desprod' => 'required',
            ]);  
          
        //dd($request);
        $producto = Producto::where('id',$id)->update([
            'codigo' => $request -> codprod,
            'nombre' => $request -> nomprod,
            'categoria_id' => $request -> catprod,
            'descripcion' => $request -> desprod
        ]);

        //volvemos a cargar el formulario de modificacion
        $productos = Producto::get();
        return view('/productos/modproducto',[
            'productos' => $productos
        ]);
        

    }   



    public function eliprod(){
        return view('/productos/eliproducto');
    }

    
    public function consultaprod(){
        $sucursals = Sucursal::get()->sortBy('nombre');
        return view('/productos/buscaproducto',[
            'sucursals' => $sucursals
            ]);
    }
        

    public function listaprod(){
        $productos = Producto::get();
        $categorias = Categoria::get();

        //dd($categorias);

        return view('/productos/listaproducto',
            ['productos' => $productos,
            'categorias' => $categorias
             ]);
    }
    
}
