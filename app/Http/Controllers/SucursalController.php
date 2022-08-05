<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function menusuc(){
        return view('/sucursales/sucursal');
    }
    
    public function creasuc(){
        return view('/sucursales/creasucursal');
    }

    public function modsuc(){
        return view('/sucursales/modsucursal');
    }

    public function elisuc(){
        return view('/sucursales/elisucursal');
    }

    public function listasuc(){
        $sucursals = Sucursal::get();

        //dd($sucursals);

        return view('/sucursales/listasucursal',[
            'sucursals' => $sucursals

        ]);
    }

    public function grabasuc(Request $request){

        $this->validate($request,[
            'nomsuc' => 'required',
            'dirsuc' => 'required',
            'comsuc' => 'required',
            'ciusuc' => 'required',
            'telsuc' => 'required'            
        ]);  
      
    //dd($request);
    $sucursal = new Sucursal();
    $sucursal->nombre = $request -> nomsuc;
    $sucursal->direccion = $request -> dirsuc;
    $sucursal->comuna = $request -> comsuc;
    $sucursal->ciudad = $request -> ciusuc;
    $sucursal->telefono = $request -> telsuc;
    
    $sucursal->save();


    //volvemos a cargar el formulario de ingreso
    return view('/sucursales/creasucursal');
    }
   
}
