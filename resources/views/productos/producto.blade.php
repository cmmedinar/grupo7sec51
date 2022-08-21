@extends('layouts.master')
@section('vista','Maestro - Productos')

@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/creaprod';">Crear Producto</button>
     </div>
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/modprod';" >Modificar/Eliminar Producto</button>
     </div>
  </div>
</div>

   
@stop         

