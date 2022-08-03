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
   
}
