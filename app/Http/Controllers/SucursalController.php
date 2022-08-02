<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function menusuc(){
        return view('/sucursal');
    }
    
    public function creasuc(){
        return view('/creasucursal');
    }

    public function modsuc(){
        return view('/modsucursal');
    }

    public function elisuc(){
        return view('/elisucursal');
    }
   
}
