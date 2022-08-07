<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Inventario;

class InventarioController extends Controller
{
    public function invAll(){
        $inventarios = Inventario::get();
        $productos = Producto::get();
        $sucursals = Sucursal::get();
        $categorias = Categoria::get();

        //dd($categorias);

        return view('/inventarios/listainventario',
            ['productos' => $productos,
            'categorias' => $categorias,
            'inventarios' => $inventarios,
            'sucursals' => $sucursals
             ]);
    }

    public function asignar(){
        $sucursals = Sucursal::get()->sortBy('nombre');
        $productos = Producto::get()->sortBy('nombre');
       

        return view('/inventarios/asignarsucursal',[
            'sucursals' => $sucursals,
            'productos' => $productos 
        ]);
    }

    public function grabainv(Request $request){

            $this->validate($request,[
                'idprod' => 'required',
                'idsuc' => 'required',
                'cantprod' => 'required',
                'precioprod' => 'required'
            ]);  
          
        //dd($request);
        $inventario = new Inventario();
        $inventario->producto_id = $request -> idprod;
        $inventario->sucursal_id = $request -> idsuc;
        $inventario->cantidad = $request -> cantprod;
        $inventario->precio = $request ->precioprod;
        $inventario->estado = true;
        
        $inventario->save();


        //volvemos a cargar el formulario de asignacion
        $sucursals = Sucursal::get();
        $productos = Producto::get();
     
        return view('/inventarios/asignarsucursal',[
            'sucursals' => $sucursals],[
            'productos' => $productos
            ]);
    }
    


}
